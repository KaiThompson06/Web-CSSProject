

<?php
$title = "Cart";
$description = "Review the current cart";
require './templates/header.php';
?>

<main>
<?php

    session_start();
    require_once 'crud.php';
    $crud = new crud();
if (isset($_SESSION['username']))
        {
            if (isset($_SESSION['cardsInCart']) && $_SESSION['cardsInCart'] !== array())
            {
                $cartTotal = 0;
                foreach ($_SESSION['cardsInCart'] as $cartItem)
                {
                    $sql = "SELECT * FROM cards WHERE cardID = '" . $crud->escape($cartItem) . "'";
                    $result = $crud->read($sql);
                    if ($result)
                    {
                        $cardID = $cartItem;
//        Rank of the card
                        $rank = $result[0]['rank_num'];
//        Suit of the card
                        $suit  = $result[0]['suit'];
//        Color of the back of the card
                        $backColor  = $result[0]['back_color'];
//        Price of the card
                        $price  = $result[0]['price'];
                        $cartTotal += $price;
//        card origin date
                        $date  = $result[0]['year'];
//        image path
                        $image  = $result[0]['image_path'];
                        require './templates/card.php';
                    }
                }

                echo "<p>This cart totals to $cartTotal</p>";
                echo "<a href='checkout.php'>Checkout</a>";
            }
            else {
                echo "<p>Your cart is currently empty</p>";
            }


        }
else
{
    echo "<p>You have to be logged in to view your cart</p> <a href='login.php'>Login</a>";
}
?>

</main>


<?php
require './templates/footer.php';
?>
