<?php

class MySqlQuery extends MySql{
    //
    function registerQuery($username, $password){
        $username = $this->connection->real_escape_string($username);
        $password = $this->connection->real_escape_string($password);
        $query = "INSERT INTO admin_user (AdminUsername, AdminPassword) VALUES ('".$username.",'".password_hash($password, PASSWORD_DEFAULT)."')";
        $this->connection->query($query);
    }

    function loginQuery($username, $password){
        $username = $this->connection->real_escape_string($username);
        $password = $this->connection->real_escape_string($password);
        
    }
}

?>