<?php

class MySqlQuery extends MySql{
    //
    public function registerQuery($username, $password){
        $username = MySqlQuery::escapeFunction($username);
        $password = MySqlQuery::escapeFunction($password);
        $query = "INSERT INTO admin_user (adminUsername, adminPassword) VALUES ('".$username."', '".password_hash($password, PASSWORD_DEFAULT)."')";
        return $this->connection->query($query);
    }

    public function loginQuery($username, $password){
        $username = MySqlQuery::escapeFunction($username);
        $password = MySqlQuery::escapeFunction($password);
        $query = "SELECT adminId, adminUsername, adminPassword FROM admin_user WHERE adminUsername = " . "'" . $username . "'". ";";
        return $this->connection->query($query); 
    }

    private function escapeFunction($text){
        return $this->connection->real_escape_string($text);
    }
}

?>