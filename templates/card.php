
<!-- holds the html for an individual card -->

<!--
cardID
$cardID
Rank of the card
$rank
Suit of the card
$suit
Color of the back of the card
$backColor
Price of the card
$price
card origin date
$date
-->

<?php
    require_once "utilites.php";
    $util = new utilites();
?>
<div class="card">
    <figure>
        <img src="images/card_backs/<?php echo $backColor; ?>.png" alt="<?php echo $backColor; ?>">
        <img src="images/cards/<?php echo $rank . substr($suit, 0, 1); ?>.png" alt="<?php echo $util->rankNumToWord($rank). " of " . $suit; ?>">
    </figure>
    <div>
        <h4><?php echo $util->rankNumToWord($rank). " of " . $suit; ?></h4>
        <div>
            <p><?php echo $backColor; ?> back</p>
            <p>circa. <?php echo $date; ?></p>
        </div>
        <p>CAD $<?php echo $price; ?>.00</p>
        <a href="./product.php?cardID=<?php echo $cardID; ?>">View Product</a>
    </div>
</div>

