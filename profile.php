
<!-- add the header -->
<?php
$title = "My Profile";
$description = "profile page";
include './templates/header.php';
?>
<main id="profilePage">
    <?php
//    get current session
    // Check if session is already started
    if (session_status() == PHP_SESSION_NONE) {
        // Start the session if not already started
        session_start();
    }

    if (!isset($_SESSION['username']))
    {
        header('Location: ./logIn.php');
    }

    require_once 'crud.php';

    $crud = new crud();

    $sql = "SELECT * FROM users WHERE username = '" . $_SESSION['username']. "'";

    $response = $crud->read($sql);
    if (!$response)
    {
        echo "<p>An Error Ocurred</p>";
        die();
    }
    $username = $_SESSION['username'];
    $email = $response[0]['email'];
    if ($email == null)
    {
        $email = "";
    }
    $profile_image = $response[0]['profile_image'];
    if ($profile_image == null)
    {
        $profile_image = "./images/userProfilePictures/default.jpg";
    }
    require './templates/profilePage.php';


    ?>
</main>
<!-- add the footer -->
<?php
include './templates/footer.php';
?>