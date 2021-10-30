<?php

class StatusController extends Controller {
    protected $auth_actions = array('index', 'post');

    public function indexAction() {
        $user = $this->session->get('user');
        $statuses = $this->db_manager->get('Status')->fetchAllPersonalArchivesByUserId($user['id']);

        return $this->render(array(
            'user_name' => $user['user_name'],
            'statuses'  => $statuses,
        ));
    }

    public function postAction() {

        // トークンのやり取りがなければ投稿するためのフォーム画面を表示
        if (is_null($this->request->getPost('_token'))) {
            return $this->render(array(
                'title'     => '',
                'subtitle'  => '',
                'body'  => '',
                // 後で処理
                'file_name' => '',
                'file_path' => '',
                '_token'    => $this->generateCsrfToken('status/post'),
            ));
        }

        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('status/post', $token)) {
            return $this->redirect('/');
        }

        $title = $this->request->getPost('title');
        $subtitle = $this->request->getPost('subtitle');
        $body = $this->request->getPost('body');
        // 後で処理
        // ファイル関連の取得
        $file = $_FILES['img'];
        $file_name = basename($file['name']);
        $tmp_path = $file['tmp_name'];
        $file_err = $file['error'];
        $file_size = $file['size'];
        $upload_dir = '../web/images/';
        $save_file_name = date('YmdHis') . $file_name;
        $file_path = $upload_dir . $save_file_name;

        $errors = array();

        // bodyの中身出力
        print_r($body);

        // バリデーションを行う
        // タイトル
        if (!mb_strlen($title)) {
            $errors[] = 'タイトルを入力してください';
        } else if (mb_strlen($title) > 40) {
            $errors[] = 'タイトルは40文字以内で入力してください';
        }

        // サブタイトル
        if (mb_strlen($subtitle) > 40) {
            $errors[] = 'サブタイトルは40文字以内で入力してください';
        }

        // 本文
        if (mb_strlen($body) > 200) {
            $errors[] = '本文は200文字以内で入力してください';
        }

        // ファイルのバリデーション
        if ($file_size > 1048576 || $file_err == 2) {
            $errors[] = 'ファイルサイズは1MB未満にしてください';
        }

        

        // ファイル名
        // 後で処理
        if (mb_strlen($file_name) > 200) {
            $errors[] = 'ファイル名は200文字以内で入力してください';
        }

        // ファイルパス
        // 後で処理
        if (mb_strlen($file_path) > 200) {
            $errors[] = 'ファイルパスは200文字以内で入力してください';
        }

        if (count($errors) === 0) {
            // 画像ファイルがあるかどうか
            if (is_uploaded_file($tmp_path)) {
                // 拡張子は画像形式か
                $allow_ext = array('jpg', 'jpeg', 'png');
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                if (!in_array(strtolower($file_ext), $allow_ext)) {
                    $errors[] = '画像ファイルを添付してください';
                }

                // 画像ファイルを移動できたかどうか
                if(!move_uploaded_file($tmp_path, $file_path)) {
                    $errors[] = 'ファイルが保存できませんでした';
                }
            }

            if (count($errors) === 0) {
                $user = $this->session->get('user');
                $this->db_manager->get('Status')->insert($user['id'], $title, $subtitle, $body, $file_name, $file_path);

                return $this->redirect('/');
            }
        }

        return $this->render(array(
            'errors'    => $errors,
            'title'     => $title,
            'subtitle'  => $subtitle,
            'body'      => $body,
            // 後で処理
            'file_name' => $file_name,
            'file_path' => $file_path,
            '_token'    => $this->generateCsrfToken('status/post'),
        ));
    }

    // ユーザ投稿一覧
    public function userAction($params) {
        $user = $this->db_manager->get('User')->fetchByUserName($params['user_name']);
        if (!$user) {
            $this->forward404;
        }

        $statuses = $this->db_manager->get('Status')->fetchAllByUserId($user['id']);

        $following = null;
        if ($this->session->isAuthenticated()) {
            $my = $this->session->get('user');
            if ($my['id'] !== $user['id']) {
                $following = $this->db_manager->get('Following')->isFollowing($my['id'], $user['id']);
            }
        }

        return $this->render(array(
            'user'      => $user,
            'statuses'  => $statuses,
            'following' => $following,
            '_token'    => $this->generateCsrfToken('account/follow'),
        ));
    }

    // 投稿詳細画面
    public function showAction($params) {
        $user = $this->session->get('user');
        $status = $this->db_manager->get('Status')->fetchByIdAndUserName($params['id'], $params['user_name']);

        if (!$status) {
            $this->forward404();
        }

        $buttonFlag = false;

        if ($user['user_name'] === $params['user_name']) {
            $buttonFlag = true;
        }

        return $this->render(array(
            'status'        => $status,
            'buttonFlag'    => $buttonFlag,
            '_token'        => '',
        ));
    }

    // 投稿削除機能
    public function deleteAction($params) {
        $status = $this->db_manager->get('Status')->fetchByIdAndUserName($params['id'], $params['user_name']);
        print_r($status);

        // トークンのやり取りがなければ削除していいかの確認画面を表示
        if (is_null($this->request->getPost('_token'))) {
            return $this->render(array(
                'status'     => $status,
                '_token'    => $this->generateCsrfToken('status/delete'),
            ));
        }

        if (!$this->request->isPost()) {
            $this->forward404();
        }

        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('status/delete', $token)) {
            return $this->redirect('/');
        }

        // 画像ファイルが存在する場合、画像ファイルを削除する
        if (!is_null($status['file_path'])) {
            unlink($status['file_path']);
        }

        // データベースから投稿を削除する
        $user = $this->session->get('user');
        $this->db_manager->get('Status')->deleteById($params['id']);

        return $this->redirect('/');

        return $this->render(array(
            'errors'    => $errors,
            'status'    => $status,
            '_token'    => $this->generateCsrfToken('status/delete'),
        ));
    }
}