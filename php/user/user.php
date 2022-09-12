<?php

class User {
    private $username;
    private $password;
    private $sessionId;

    function __construct($username, $password, $sessionId){
        $this->username = $username;
        $this->password = $password;
        $this->sessionId = $sessionId;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getSessionId(){
        return $this->sessionId;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function setPassword($password){
        $this->password= $password;
    }
}

?>