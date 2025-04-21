<?php
session_start(); // Start the session
if (isset($_POST['addToCart'])) {
    $cardID = $_POST['addToCart'];
    if ($cardID) {
        // Initialize cart if it doesn't exist
        if (!isset($_SESSION['cardsInCart'])) {
            $_SESSION['cardsInCart'] = array();
        }
        // If the card is not in the cart, add it to the cart
        if (!in_array($cardID, $_SESSION['cardsInCart']))
        {
            $_SESSION['cardsInCart'][] = $cardID;
        }
    }
    header("Location: ./product.php?cardID=" . $_POST['addToCart']);
    die();
}
header("Location: ./404.php");
?>
