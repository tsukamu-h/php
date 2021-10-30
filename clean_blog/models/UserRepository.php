<?php

class UserRepository extends DbRepository {
    public function insert($user_name, $mail_address, $password) {
        $password = $this->hashPassword($password);
        $now = new DateTime();

        $sql = "INSERT INTO user(user_name, mail_address, password, created_at)
                VALUES (:user_name, :mail_address, :password, :created_at)";
        
        $stmt = $this->execute($sql, array(
            ':user_name'    => $user_name,
            ':mail_address'  => $mail_address,
            ':password'     => $password,
            ':created_at'   => $now->format('Y-m-d H:i:s'),
        ));
    }

    public function hashPassword($password) {
        return sha1($password . 'SecretKey');
    }

    public function fetchByUserName($user_name) {
        $sql = "SELECT * FROM user WHERE user_name = :user_name";

        return $this->fetch($sql, array('user_name' => $user_name));
    }

    public function isUniqueUserName($user_name) {
        $sql = "SELECT COUNT(id) as count FROM user
                WHERE user_name = :user_name";

        $row = $this->fetch($sql, array(':user_name' => $user_name));
        if ($row['count'] === '0') {
            return true;
        }

        return false;
    }

    // 自己紹介文更新メソッド
    public function updateIntroductionByUserId($user_id, $introduction) {
        $sql = "UPDATE user SET introduction = :introduction
                    WHERE id = :user_id";

        $stmt = $this->execute($sql, array(
            ':introduction'    => $introduction,
            ':user_id'  => $user_id,
        ));
    }

    // すべてのユーザIDを取得するメソッド
    public function fetchAllUserName() {
        $sql = "SELECT user_name
                    FROM user";

        return $this->fetchAll($sql, array());
    }

    // フォローしているユーザを取得するメソッド
    public function fetchAllFollowingsByUserId($user_id) {
        $sql = "SELECT u.* FROM user u
                    LEFT JOIN following f ON f.following_id = u.id
                WHERE f.user_id = :user_id";
        
        return $this->fetchAll($sql, array(':user_id' => $user_id));
    }

    // 検索に完全一致もしくは部分一致するユーザ名の取得
    public function fetchAllUserNameBySearch($user_name) {
        $sql = "SELECT user_name FROM user
                    WHERE user_name LIKE '%' :user_name '%'";
        
        return $this->fetchAll($sql, array(':user_name' => $user_name));
    }

    // ユーザのパスワード更新メソッド
    public function updateUserPasswordByUserId($id, $password) {
        $password = $this->hashPassword($password);

        $sql = "UPDATE user
                    SET password = :password
                    WHERE id = :id";

        $stmt = $this->execute($sql, array(
        ':id'           => $id,
        ':password'     => $password,
        ));
    }
}