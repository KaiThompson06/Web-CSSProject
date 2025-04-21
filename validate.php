<?php

class validate
{
    public function validUsername($username)
    {
        if (empty($username)) {
            echo "<p>Username is empty</p>";
            return false;
        }
        if (!preg_match("/^[a-zA-Z]*$/", $username)) {
            echo "<p>Username is invalid</p>";
            return false;
        }
        return true;
    }
    public function validPassword($password)
    {
        if (empty($password)) {
            echo "<p>Password is empty</p>";
            return false;
        }
        if (!preg_match("/^[a-zA-Z]*$/", $password))
        {
            echo "<p>Password is not valid</p>";
            return false;
        }
        if (strlen($password) < 8) {
            echo "<p>Password too short (at least 8 character)</p>";
            return false;
        }
        return true;
    }

    public function validEmail($email)
    {
        if (empty($email)) {
            echo "<p>Email is empty</p>";
            return false;
        }
        if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
        {
            echo "<p>Email is not valid</p>";
            return false;
        }
        return true;
    }
    public function validIsAdmin($isAdmin)
    {
        if ($isAdmin == 1 || $isAdmin == 0)
        {
            return true;
        }
        return false;
    }

    public function validImagePath($image_path)
    {
        if (empty($image_path)) {
            echo "<p>Image is empty</p>";
            return false;
        }
        if (!file_exists($image_path)) {
            echo "<p>Image does not exist</p>";
            return false;
        }
        return true;
    }
}