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
    public function read($query)
    {
        $result = $this->conn->query($query);
        if($result->num_rows > 0)
        {
            return $result;
        }
        return false;
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