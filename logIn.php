
<!-- add the header -->
<?php
//    get current session
// Check if session is already started
if (session_status() == PHP_SESSION_NONE) {
    // Start the session if not already started
    session_start();
}

$title = "Login";
$description = "Login";
include './templates/header.php';


//    handle the posted information
require_once 'authHandler.php';
$auth = new authHandler();


if (isset($_POST['username']))
{

    $username = $auth->escapeString($_POST['username']);
    $password = $auth->escapeString($_POST['password']);
    if ($auth->signInUser($username, $password))
    {
        //    get current session
        // Check if session is already started
        if (session_status() == PHP_SESSION_NONE) {
            // Start the session if not already started
            session_start();
        }
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = false;
        header("Location: ./profile.php");
    }
    else
    {
        echo "<p class='error'>Wrong username or password!</p>";
    }
}
?>
<main id="logInPage">
    <h1>Customer Login</h1>
    <div>
        <div>
            <h2>Already have an account?</h2>
            <p>Login!</p>
            <!-- form for login -->
            <!-- method is post, action is the same page -->
            <form method="POST">
                <!-- divs for each question, holding a label and the input -->
                <div>
                    <label for="username">Username: </label>
                    <input type="text" placeholder="Username" id="username" name="username" required>
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                </div>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
    <a href="register.php">Don't have an account?</a>
</main>


<!-- add the footer -->
<?php

require './templates/footer.php';
?>