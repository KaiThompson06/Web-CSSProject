<?php

require_once "database.php";
class crud extends database
{
    public function __construct(){
        parent::__construct();
    }

    public function create($query)
    {
        $result = $this->conn->query($query);
        if ($result === true) {
            return true;
        }
        return false;
    }

    public function read($query)
    {
        $result = $this->conn->query($query);
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function update($query)
    {
        $result = $this->conn->query($query);
        if ($result === true) {
            return true;
        }
        return false;
    }
    public function delete($query)
    {
        $result = $this->conn->query($query);
        if ($result === true) {
            return true;
        }
        return false;
    }
    public function escape($string)
    {
        return $this->conn->real_escape_string($string);
    }
}