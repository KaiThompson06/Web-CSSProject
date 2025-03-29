<?php

require_once "database.php";
class crud extends database
{
    public function __construct(){
        parent::__construct();
    }

    public function create()
    {

    }
    public function read()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function escape($string)
    {
        return $this->conn->real_escape_string($string);
    }
}