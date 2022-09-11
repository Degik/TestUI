<?php

class MySql {
    // Insert username for login
    protected $userDb;
    // Insert password (defualt is empty)
    protected $passwordDb;
    // Insert host (Default is localhost or 127.0.0.1)
    protected $hostDb;
    // Insert database name
    protected $nameDb;
    //Connection start with null
    protected $connection = null;

    function __constructor($userDb, $passwordDb, $hostDb, $nameDb){
        $this->userDb = $userDb;
        $this->passwordDb = $passwordDb;
        $this->hostDb = $hostDb;
        $this->nameDb = $nameDb;
    }

    protected function createConnection(){
        $this->connection = mysqli_connect($this->hostDb, $this->userDb, $this->passwordDb, $this->nameDb);
        if($this->connection->connect_error){
            die("Errore connessione con il database: ". $this->connection->connect_error);
        }
    }

    protected function closeConnection(){
        $this->connection->close();
    }
}

?>