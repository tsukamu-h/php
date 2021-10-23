<?php

class StatusController extends Controller {
    protected $auth_actions = array('index', 'post');

    public function indexAction() {
        $user = $this->session->get('user');
        $statuses = $this->db_manager->get('Status')
            ->fetchAllPersonalArchivesByUserId($user['id']);

        // 追加
        // print_r($user);
        // print_r($statuses);

        return $this->render(array(
            'statuses'  => $statuses,
            'body'      => '',
            '_token'    => $this->generateCsrfToken('status/post'),
        ));
    }

    public function postAction() {
        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('status/post', $token)) {
            return $this->redirect('/');
        }

        $body = $this->request->getPost('body');

        $errors = array();

        if (!strlen($body)) {
            $errors[] = 'ひとことを入力してください';
        } else if (mb_strlen($body) > 200) {
            $errors[] = 'ひとことは200文字以内で入力してください';
        }

        if (count($errors) === 0) {
            $user = $this->session->get('user');
            $this->db_manager->get('Status')->insert($user['id'], $body);

            return $this->redirect('/');
        }

        $user = $this->session->get('user');
        $statuses = $this->db_manager->get('Status')
            ->fetchAllPersonalArchivesByUserId($user['id']);
        
        return $this->render(array(
            'errors'    => $errors,
            'body'      => $body,
            'statuses'  => $statuses,
            '_token'    => $this->generateCsrfToken('status/post'),
        ), 'index');
    }

    public function userAction($params) {
        $user = $this->db_manager->get('User')
            ->fetchByUserName($params['user_name']);
        if (!$user) {
            $this->forward404();
        }

        $statuses = $this->db_manager->get('Status')
            ->fetchAllByUserId($user['id']);

        $following = null;
        if ($this->session->isAuthenticated()) {
            $my = $this->session->get('user');
            if ($my['id'] !== $user['id']) {
                $following = $this->db_manager->get('Following')
                    ->isFollowing($my['id'], $user['id']);
            }
        }

        return $this->render(array(
            'user'      => $user,
            'statuses'  => $statuses,
            'following' => $following,
            '_token'    => $this->generateCsrfToken('account/follow'),
        ));
    }

    public function showAction($params) {
        $status = $this->db_manager->get('Status')
            ->fetchByIdAndUserName($params['id'], $params['user_name']);

        if (!$status) {
            $this->forward404();
        }

        return $this->render(array('status' => $status));
    }

    // ユーザ一覧のためのアクション
    public function userallAction($params) {
        $users = $this->db_manager->get('User')
            ->fetchAllUserName();
        if (!$users) {
            $this->forward404();
        }

        return $this->render(array(
            'users'      => $users,
            '_token'    => $this->generateCsrfToken('status/userall'),
        ));
    }

    // パスワード変更のためのアクション
    public function passupdateAction($params) {
        $user = $this->session->get('user');
        return $this->render(array(
            'user'      => $user['id'],
            '_token' => $this->generateCsrfToken('status/passupdate')));
    }

    public function passupdatecompAction($params) {
        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('status/passupdate', $token)) {
            // $tokenの中身確認
            echo "リダイレクト";
            return $this->redirect('/status/passupdate');
        }

        $password = $this->request->getPost('password');
        $password_rewrite = $this->request->getPost('password_rewrite');

        $errors = array();
        // print_rデバッグ
        // print_r($this->session->get('csrf_tokens/status/passupdate'));
        // print_r($token);

        if (!strlen($password)) {
            $errors[] = 'パスワードを入力してください';
        } else if (!strlen($password_rewrite)) {
            $errors[] = 'パスワードを再度入力してください';
        } else if (4 > strlen($password) || strlen($password) > 30 || 4 > strlen($password_rewrite) || strlen($password_rewrite) > 30) {
            $errors[] = 'パスワードは4～30文字以内で入力してください';
        } else if ($password !== $password_rewrite) {
            $errors[] = 'パスワードを正しく入力してください';
        }

        $user = $this->session->get('user');

        if (count($errors) === 0) {
            $this->db_manager->get('User')->updateUserPassword($user['id'], $password);

            // 戻り地がredirect()メソッドを使うのではなくrender()メソッドを使う必要があると思われる
            //return $this->redirect('/status/passupdatecomp');
            return $this->render(array());
        }

        return $this->render(array(
            'user'      => $user['id'],
            'errors'    => $errors,
            '_token'    => $this->generateCsrfToken('status/passupdate'),
        ), 'passupdate');
    }
}