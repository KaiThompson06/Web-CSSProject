
    <h1>Welcome <?php echo $username; ?>!</h1>

    <form method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Upload a personalized background image</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit">
    </form>
    <form method="post">
        <label for="email">Change your email address</label>
        <input type="email" name="email" placeholder="example@email.com">
        <input type="submit">
    </form>
    <a href="./logout.php">Logout</a>
    <img src="<?php echo $profile_image; ?>" alt="selected profile photo" class="profileImage">


<?php
require_once("authHandler.php");
$auth = new AuthHandler();


if(isset($_POST['email'])){
    $email = $auth->escapeString($_POST['email']);
    $auth->addEmailToUser($username, $email);
}

if(isset($_FILES["fileToUpload"]))
{
    $filename = $_FILES["fileToUpload"]["name"];

    $target_file = "./images/userProfilePictures/" . $filename;

    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    $valid_extensions = array("jpeg", "jpg", "png");

    if(in_array($file_extension, $valid_extensions)){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        {
            echo "The file " . $target_file . " has been uploaded.";
            $auth->addProfileImagePath($username, $target_file);
            header("location: ./profile.php");
        }
    }


}