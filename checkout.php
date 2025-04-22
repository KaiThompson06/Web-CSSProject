<?php
if(isset($_POST['submit'])){
require('crud.php');
$crud = new crud();

session_start();

foreach($_SESSION['cardsInCart'] as $value)
{
    $sql = "DELETE FROM cards WHERE cardID = '$value'";
    $crud->delete($sql);
}

$_SESSION['cardsInCart'] = array();
header('location: purchaseSuccessful.php');
}


$title = "Checkout";
$description = "Checkout the cart";
require("./templates/header.php");
?>

<main>
    <p>Are you sure you want to buy these items?</p>
    <form method="post">
        <input type="submit" name="submit" id="submit" value="Yes">
        <a href="./cart.php">No</a>
    </form>
</main>



<?php
require("./templates/footer.php");
