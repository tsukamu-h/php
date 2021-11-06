<?php

class AccountController extends Controller {
    protected $auth_actions = array('index', 'signout', 'follow');
    
    public function signupAction() {
        return $this->render(array(
            'user_name'     => '',
            'mail_address'   =>  '',
            'password'      => '',
            '_token'        => $this->generateCsrfToken('account/signup'),
        ));
    }

    public function registerAction() {
        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/signup', $token)) {
            return $this->redirect('/account/signup');
        }

        $user_name = $this->request->getPost('user_name');
        $mail_address = $this->request->getPost('mail_address');
        $password = $this->request->getPost('password');

        $errors = array();

        if (!strlen($user_name)) {
            $errors[] = 'ユーザ名を入力してください';
        } else if (!preg_match('/^\w{3,20}$/', $user_name)) {
            $errors[] = 'ユーザ名は半角英数字およびアンダースコアを3～20文字以内で入力してください';
        } else if (!$this->db_manager->get('User')->isUniqueUserName($user_name)) {
            $errors[] = 'ユーザ名はすでに使用されています';
        }

        if (!strlen($mail_address)) {
            $errors[] = 'メールアドレスを入力してください';
        } else if (!preg_match('/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i', $mail_address)) {
            $errors[] = 'メールアドレスを正しく入力してください';
        } else if (strlen($mail_address) > 40) {
            'メールアドレスは40文字以内で入力してください';
        }

        if (!strlen($password)) {
            $errors[] = 'パスワードを入力してください';
        } else if (4 > strlen($password) || strlen($password) > 30) {
            $errors[] ='パスワードは4～30文字以内で入力してください';
        }

        if (count($errors) === 0) {
            $this->db_manager->get('User')->insert($user_name, $mail_address, $password);

            $this->session->setAuthenticated(true);

            $user = $this->db_manager->get('User')->fetchByUserName($user_name);
            $this->session->set('user', $user);

            return $this->redirect('/');
        }

        return $this->render(array(
            'user_name'     => $user_name,
            'mail_address'   => $mail_address,
            'password'      => $password,
            'errors'        => $errors,
            '_token'        => $this->generateCsrfToken('account/signup'),
        ), 'signup');
    }

    public function indexAction() {
        $user = $this->session->get('user');
        $followings = $this->db_manager->get('User')->fetchAllFollowingsByUserId($user['id']);

        return $this->render(array(
            'user'          => $user,
            'followings'    => $followings,
        ));
    }

    public function signinAction() {
        if ($this->session->isAuthenticated()) {
            return $this->redirect('/account');
        }

        return $this->render(array(
            'user_name' => '',
            'password'  => '',
            '_token'    => $this->generateCsrfToken('account/signin'),
        ));
    }

    public function authenticateAction() {
        if ($this->session->isAuthenticated()) {
            return $this->redirect('/account');
        }

        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/signin', $token)) {
            return $this->redirect('/account/signin');
        }

        $user_name = $this->request->getPost('user_name');
        $password = $this->request->getPost('password');

        $errors = array();

        if (!strlen($user_name)) {
            $errors[] = 'ユーザIDを入力してください';
        }

        if (!strlen($password)) {
            $errors[] = 'パスワードを入力してください';
        }

        if (count($errors) === 0) {
            $user_repository = $this->db_manager->get('User');
            $user = $user_repository->fetchByUserName($user_name);

            if (!$user || ($user['password'] !== $user_repository->hashPassword($password))) {
                $errors[] = 'ユーザIDかパスワードが不正です';
            } else {
                $this->session->setAuthenticated(true);
                $this->session->set('user', $user);

                return $this->redirect('/');
            }
        }

        return $this->render(array(
            'user_name' => $user_name,
            'password'  => $password,
            'errors'    => $errors,
            '_token'    => $this->generateCsrfToken('account/signin'),
        ), 'signin');
    }

    public function signoutAction() {
        $this->session->clear();
        $this->session->setAuthenticated(false);

        return $this->redirect('/account/signin');
    }

    // アカウント情報を更新するメソッド
    public function updateAction() {

        if (!$this->request->isPost()) {
            $this->forward404();
        }

        return $this->render();
    }

    // ユーザ一覧のためのアクション
    public function userallAction($params) {
        $users = $this->db_manager->get('User')
            ->fetchAllUserName();
        if (!$users) {
            $this->forward404();
        }

        return $this->render(array(
            'users'     => $users,
            'search'    => '',
            '_token'    => $this->generateCsrfToken('account/userall'),
        ));
    }

    public function followAction() {
        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $following_name = $this->request->getPost('following_name');
        if (!$following_name) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/follow', $token)) {
            return $this->redirect('/user/' . $following_name);
        }

        $follow_user = $this->db_manager->get('User')->fetchByUserName($following_name);
        if (!$following_name) {
            $this->forward404();
        }

        $user = $this->session->get('user');

        $following_repository = $this->db_manager->get('Following');
        if ($user['id'] !== $following_name['id'] && !$following_repository->isFollowing($user['id'], $follow_user['id'])) {
            $following_repository->insert($user['id'], $follow_user['id']);
        }

        return $this->redirect('/account');
    }

    public function followdeleteAction() {
        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $following_name = $this->request->getPost('following_name');
        if (!$following_name) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/follow', $token)) {
            return $this->redirect('/user/' . $following_name);
        }

        $follow_user = $this->db_manager->get('User')
            ->fetchByUserName($following_name);
        if (!$follow_user) {
            $this->forward404();
        }

        $user = $this->session->get('user');

        $following_repository = $this->db_manager->get('Following');
        if ($user['id'] !== $follow_user['id']
            && $following_repository->isFollowing($user['id'], $follow_user['id'])) {
                $following_repository->delete($user['id'], $follow_user['id']);
        }

        return $this->redirect('/account');
    }

    public function searchresultAction() {
        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $search = $this->request->getPost('search');
        
        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/userall', $token)) {
            return $this->redirect('/account/userall');
        }

        $errors = array();

        if (!strlen($search)) {
            $errors[] = 'ユーザ名を入力してください';
        }

        // エラーがなければ、users変数にSELECT文によって取得したユーザ名を配列で格納
        if (count($errors) === 0) {
            $users = $this->db_manager->get('User')->fetchAllUserNameBySearch($search);
        }

        // print_rデバッグ
        //  print_r($users);
        

        return $this->render(array(
            'errors'        => $errors,
            'users'          => $users,
            '_token'        => $this->generateCsrfToken('account/userall'),
        ));
    }

    // 自己紹介文を更新するメソッド
    public function introductionupdateAction() {

        if (is_null($this->request->getPost('_token'))) {
            return $this->render(array(
                'introduction' => '',
                '_token'    => $this->generateCsrfToken('account/introductionupdate'),
            ));
        }

        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/introductionupdate', $token)) {
            return $this->redirect('/');
        }

        $introduction = $this->request->getPost('introduction');

        $errors = array();

        // バリデーションを行う
        // 自己紹介文
        if (!mb_strlen($introduction)) {
            $errors[] = '自己紹介文を入力してください';
        } else if (mb_strlen($introduction) > 200) {
            $errors[] = '自己紹介文は200文字以内で入力してください';
        }
        
        if (count($errors) === 0) {
            $user = $this->session->get('user');
            $this->db_manager->get('User')->updateIntroductionByUserId($user['id'], $introduction);

            // 更新をセッションに反映させる（一応うまく行ったがこのままでいいのかは怪しい）
            $user = $this->db_manager->get('User')->fetchByUserName($user['user_name']);
            $this->session->set('user', $user);

            return $this->redirect('/account');
        }
        

        return $this->render(array(
            'errors'        => $errors,
            'introduction'  => $introduction,
            '_token'        => $this->generateCsrfToken('account/introductionupdate'),
        ));
    }

    // パスワードを更新するメソッド
    public function passupdateAction() {

        if (is_null($this->request->getPost('_token'))) {
            $user = $this->session->get('user');
            return $this->render(array(
                'user'      => $user['id'],
                '_token'    => $this->generateCsrfToken('account/passupdate'),
            ));
        }

        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/passupdate', $token)) {
            return $this->redirect('/');
        }

        $password = $this->request->getPost('password');
        $password_rewrite = $this->request->getPost('password_rewrite');

        $errors = array();

        // バリデーションを行う
        // パスワードと再入力のチェック
        if (!strlen($password)) {
            $errors[] = 'パスワードを入力してください';
        } else if (!strlen($password_rewrite)) {
            $errors[] = 'パスワードを再度入力してください';
        } else if (4 > strlen($password) || strlen($password) > 30 || 4 > strlen($password_rewrite) || strlen($password_rewrite) > 30) {
            $errors[] = 'パスワードは4～30文字以内で入力してください';
        } else if ($password !== $password_rewrite) {
            $errors[] = 'パスワードを正しく入力してください';
        }

        if (count($errors) === 0) {
            $user = $this->session->get('user');
            $this->db_manager->get('User')->updateUserPasswordByUserId($user['id'], $password);

            // 更新をセッションに反映させる（一応うまく行ったがこのままでいいのかは怪しい）
            $user = $this->db_manager->get('User')->fetchByUserName($user['user_name']);
            $this->session->set('user', $user);

            return $this->redirect('/account');
        }
        

        return $this->render(array(
            'user'      => $user['id'],
            'errors'        => $errors,
            '_token'        => $this->generateCsrfToken('account/introductionupdate'),
        ));
    }
}