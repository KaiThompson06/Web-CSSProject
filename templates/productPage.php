<?php
require_once "utilites.php";
$util = new utilites();
?>


<main class="product">
    <figure>
        <img src="images/card_backs/<?php echo $backColor; ?>.png" alt="<?php echo $backColor; ?>">
        <img src="images/cards/<?php echo $rank . substr($suit, 0, 1); ?>.png" alt="<?php echo $util->rankNumToWord($rank). " of " . $suit; ?>">
    </figure>
    <div>
        <h4><?php echo $util->rankNumToWord($rank). " of " . $suit; ?></h4>
        <div>
            <p><?php echo $backColor; ?> back</p>
            <p>This originates from a pack of cards from <?php echo $date; ?>.</p>
        </div>
        <p>CAD $<?php echo $price; ?>.00</p>
        <form action="./addToCart.php" method="post">
            <input type="hidden" name="addToCart" value="<?php echo $cardID; ?>">
            <input type="submit" name="submit" value="Add To Cart">
        </form>
    </div>
</main>
