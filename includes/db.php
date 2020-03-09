<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function _construct(){
        $this->host ='localhost';
        $this->db   ='name';
        $this->user ='postgres';
        $this->password = 'upja3dA';
        $this->charset  ='utf8mb4';
    }
    function connect(){
        try {
            $connection = 
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}
?>