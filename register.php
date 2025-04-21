
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
    $repeatPassword = $auth->escapeString($_POST['repeatPassword']);
    $email = $auth->escapeString($_POST['email']);

    if ($auth->signUpUser($username, $password, $repeatPassword))
    {
        $auth->addEmailToUser($username, $email);
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = false;
        header("Location: ./profile.php");
    }
    else
    {
        echo "<p>Error creating account!</p>";
    }

}
?>
<main id="logInPage">
    <h1 >Customer Login</h1>
    <div>
        <div>
            <h2>Dont have an account yet?</h2>
            <p>Create a new account now!</p>
            <!-- form for login -->
            <!-- method is post, action is the same page -->
            <form method="POST">
                <!-- divs for each question, holding a label and the input -->
                <div>
                    <label for="username">Username: </label>
                    <input type="text" placeholder="Username" id="username" name="username" required>
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" placeholder="Example@email.com" id="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                </div>
                <div>
                    <label for="repeatPassword">Repeat Password: </label>
                    <input type="password" placeholder="Repeat Password" id="repeatPassword" name="repeatPassword" required>
                </div>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
    <a href="logIn.php">Already have an account?</a>
</main>


<!-- add the footer -->
<?php

require './templates/footer.php';
?>