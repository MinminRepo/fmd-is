<?php

class DBConnection {

    private $dbhost;
    private $username;
    private $password;
    private $database;

    private $connection;

    private $last_error;

    public function __construct ($host, $user, $pass, $db) {

        $this->dbhost = $host;
        $this->username = $user;
        $this->password = $pass;
        $this->database = $db;

        $this->connection = new mysqli (
            $this->dbhost,
            $this->username,
            $this->password,
            $this->database
        );

    }

    public function db_extract ($query_string, $parameters) {

        

    }

}