<?php

class User_Model extends Model {

    public function getUser($uId){
        $st = $this->db->prepare("SELECT * FROM users WHERE user_id = ? LIMIT 1");
        $st->execute(array($uId));
        if ($st->rowCount() == 1) {
            return $st->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}