<?php
require_once 'validate.php';
require_once 'crud.php';
$validate = new Validate();
$crud = new crud();

//this class handles all of the user input for login logout
class authHandler
{
    public function signInUser($username, $password){
        return $this->signIn($username, $password, "users");
    }
    public function signIn($username, $password, $databaseName)
    {
        global $validate;
        global $crud;

        if ($validate->validUsername($username) && $validate->validPassword($password))
        {
            $password = hash("sha512", $password);
            $sql = "SELECT * FROM $databaseName WHERE username = '$username' AND password_hash = '$password'";
            if($crud->read($sql))
            {
                return true;
            }
            return false;
        }

        else
        {
            return false;
        }
    }


    public function signUpUser($username, $password, $repeatPassword)
    {
        return $this->signUp($username, $password, $repeatPassword, "users");
    }
    public function signUp($username, $password, $repeatPassword, $databaseName)
    {
        global $validate;
        global $crud;

        if ($password !== $repeatPassword) {
            echo "Passwords do not match!";
            return false;
        }

        if ($validate->validUsername($username) && $validate->validPassword($password) && $validate->validPassword($repeatPassword) && !$this->isUsernameTaken($username))
        {
            $password = hash("sha512", $password);
            $sql = "INSERT INTO $databaseName (username, password_hash) VALUES ('$username', '$password')";
            if($crud->create($sql))
            {
                return true;
            }
            return false;
        }
        else
        {
            return false;
        }
    }

    public function addEmailToUser($username, $email)
    {
        $this->addEmail($username, $email, "users");
    }
    public function addEmail($username, $email, $databaseName)
    {
        global $validate;
        global $crud;

        if ($validate->validUsername($username) && $validate->validEmail($email) && !$this->isEmailTaken($email))
        {

            $sql = "UPDATE $databaseName SET email = '$email' WHERE username = '$username'";
            if($crud->update($sql))
            {
                return true;
            }
            return false;
        }
        else
        {
            return false;
        }
    }

    public function addProfileImagePath($username, $image_path)
    {
        global $crud;
        global $validate;
        if ($this->isUsernameTaken($username) && $validate->validImagePath($image_path))
        {
            $sql = "UPDATE users SET profile_image = '$image_path' WHERE username = '$username'";
            if ($crud->update($sql))
            {
                return true;
            }
            return false;
        }
        else
        {
            return false;
        }
    }

    public function updateUsername($username, $newUsername)
    {
        global $crud;
        global $validate;
        if (!$this->isUsernameTaken($newUsername) && $this->isUsernameTaken($username) && $validate->validUsername($newUsername))
        {
            $sql = "UPDATE users SET username = '$newUsername' WHERE username = '$username'";
            if($crud->update($sql))
            {
                return true;
            }
            return false;
        }
        else
        {
            return false;
        }
    }

    public function updateIsAdmin($username, $isAdmin)
    {
        global $crud;
        global $validate;
        if ($this->isUsernameTaken($username) && $validate->validIsAdmin($isAdmin))
        {
            $sql = "UPDATE users SET isAdmin = '$isAdmin' WHERE username = '$username'";
            if($crud->update($sql))
            {
                return true;
            }
            return false;
        }
        else
        {
            return false;
        }
    }

    private function isUsernameTaken($username)
    {
        global $crud;
        $sql = "SELECT * FROM users WHERE username = '$username'";
        if(!$crud->read($sql))
        {
            return false;
        }
        return true;
    }

    private function isEmailTaken($email)
    {
        global $crud;
        $sql = "SELECT * FROM users WHERE email = '$email'";
        if(!$crud->read($sql))
        {
            return false;
        }

        return true;
    }
    public function escapeString($string)
    {
        global $crud;
        return $crud->escape($string);
    }
}