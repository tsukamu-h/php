<?php

class CleanBlogApplication extends Application {
    protected $login_action = array('account', 'signin');

    public function getRootDir() {
        return dirname(__FILE__);
    }

    protected function registerRoutes() {
        return array(
            '/'
                => array('controller' => 'status', 'action' => 'index'),
            '/status/post'
                => array('controller' => 'status', 'action' => 'post'),
            '/user/:user_name'
                => array('controller' => 'status', 'action' => 'user'),
            '/user/:user_name/status/:id'
                => array('controller' => 'status', 'action' => 'show'),
            '/delete/:user_name/status/:id'
                => array('controller' => 'status', 'action' => 'delete'),
            '/account'
                => array('controller' => 'account', 'action' => 'index'),
            '/account/:action'
                => array('controller' => 'account'),
            '/account/update'
                => array('controller' => 'account', 'action' => 'update'),
            '/follow'
                => array('controller' => 'account', 'action' => 'follow'),
            // フォローを外すためのルーティング
            '/followdelete'
                => array('controller' => 'account', 'action' => 'followdelete'),
            // 検索結果の表示のためのルーティング
            '/account/searchresult'
                => array('controller' => 'account', 'action' => 'searchresult'),
        );
    }

    protected function configure() {
        $this->db_manager->connect('master', array(
            'dsn'       => 'mysql:dbname=clean_blog;host=localhost',
            'user'      => 'root',
            'password'  => '',
        ));
    }
}