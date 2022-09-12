<?php

class MySql {
    function __constructor(){
        // Default constructor
    }

    public function createConnection(){
        $this->connection = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
        if($this->connection->connect_error){
            die("Errore connessione con il database: ". $this->connection->connect_error);
        } else {
            echo("Connessione con il database aperta");
        }
    }

    public function closeConnection(){
        $this->connection->close();
        echo("Connession chiusa");
    }

    public function getConnection(){
        return $this->connection;
    }
}

?>