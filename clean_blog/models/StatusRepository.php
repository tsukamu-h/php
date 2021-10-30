<?php

class StatusRepository extends DbRepository {
    public function insert($user_id, $title, $subtitle, $body, $file_name, $file_path) {
        $now = new DateTime();

        $sql = "INSERT INTO status(user_id, title, subtitle, body, created_at, file_name, file_path)
                VALUES (:user_id, :title, :subtitle, :body, :created_at, :file_name, :file_path)";
        
        $stmt = $this->execute($sql, array(
            ':user_id'      => $user_id,
            ':title'        => $title,
            ':subtitle'     => $subtitle,
            ':body'         => $body,
            ':created_at'   => $now->format('Y-m-d H:i:s'),
            ':file_name'    => $file_name,
            ':file_path'    => $file_path,
        ));
    }

    // ユーザIDからタイトル、サブタイトル、投稿日を取り出すメソッド
    public function fetchAllPersonalArchivesByUserId($user_id) {
        $sql = "SELECT a.*, u.user_name FROM status a
                    LEFT JOIN user u ON a.user_id = u.id
                    LEFT JOIN following f ON f.following_id = a.user_id
                        AND f.user_id = :user_id
                    WHERE f.user_id = :user_id OR u.id = :user_id
                    ORDER BY a.created_at DESC";
        
        return $this->fetchAll($sql, array(':user_id' => $user_id));
    }

    // ユーザIDからデータを取得するメソッド
    public function fetchAllByUserId($user_id) {
        $sql = "SELECT a.*, u.user_name FROM status a
                LEFT JOIN user u ON a.user_id = u.id
                WHERE u.id = :user_id
                ORDER BY a.created_at DESC";

        return $this->fetchAll($sql, array(':user_id' => $user_id));
    }

    // 投稿IDとユーザIDからデータを取得するメソッド
    public function fetchByIdAndUserName($id, $user_name) {
        $sql = "SELECT a.*, u.user_name FROM status a
                LEFT JOIN user u ON u.id = a.user_id
                WHERE a.id = :id
                    AND u.user_name = :user_name";

        return $this->fetch($sql, array(
            ':id'           => $id,
            ':user_name'    => $user_name,
        ));
    }

    // 投稿IDからデータを削除するメソッド
    public function deleteById($id) {
        $sql = "DELETE FROM status WHERE id = :id";

        $stmt = $this->execute($sql, array(
            ':id'      => $id,
        ));
    }
}