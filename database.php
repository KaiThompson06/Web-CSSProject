<?php

class database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "mysql";
    private $dbname = "project";

    protected $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if (mysqli_connect_error()) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}