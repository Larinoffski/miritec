<?php

class Index_Model extends Model
{

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        $st = $this->db->prepare("INSERT into users (user_id, 1_name, 2_name, 3_name, mail, phone, pass) VALUES (NULL,?,?,?,?,?,MD5(?))");
        array_pop($data); //remove last $data element
        $result = $st->execute(array_values($data)); // Inserting without keys
        $uId = $this->db->lastInsertId();
        if ($result){
            return $uId;
        }
        else{
            return FALSE;
        }
    }
}