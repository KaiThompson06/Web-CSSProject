<?php
require_once "crud.php";
require_once "authHandler.php";

$crud = new crud();
$validate = new validate();
session_start();

if (isset($_POST['submit']) && isset($_SESSION['username']))
{

    $sql = "SELECT isAdmin FROM users WHERE username = '"  . $crud->escape($_SESSION['username']) . "'";
    $response = $crud->read($sql);
    if($response && $response[0]['isAdmin'] == 1)
    {
//        if everything is valid, carry out the action
        switch ($_POST['mode'])
        {
            case 'edit':

                $username = $crud->escape($_POST['username']);
                $email = $crud->escape($_POST['email']);
                $profile_image = $crud->escape($_POST['profile_image']);
                $isAdmin = $crud->escape($_POST['isAdmin']);

                if ($validate->validUsername($username) && $validate->validEmail($email) && $validate->validImagePath($profile_image) && $validate->validIsAdmin($isAdmin))
                {
                    $sql = 'UPDATE users SET';

                    $sql .= ' username = "' . $username . '",';
                    $sql .= ' email = "' . $email . '",';
                    $sql .= ' profile_image = "' . $profile_image . '",';
                    $sql .= ' isAdmin = "' . $isAdmin . '"';

                    $sql .= ' WHERE id = "' . $crud->escape($_POST['userID']) . '"';
                    if ($crud->update($sql))
                    {
                        echo "<p>Successful!</p>";
                        header("location: admin.php");
                    }
                }
                else
                {
                    header("location: ./admin.php?mode=edit&userID=" . $crud->escape($_POST['userID']));
                    die();
                }
                break;

            case 'delete':
                $sql = 'DELETE FROM users WHERE id = "' . $crud->escape($_POST['userID']) . '"';
                if ($crud->delete($sql))
                {
                    echo "<p>Successful!</p>";
                    header("location: admin.php");
                }
                break;
        }
    }
    else
    {
        header("./admin.php");
    }

}
else
{
    header("./admin.php");
}