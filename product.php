
<?php
$title = "Product Page";
$description = "This is the product page";
require './templates/header.php';

if (isset($_GET['cardID']))
{
    require_once 'crud.php';
    $crud = new crud();
    $sql = "SELECT * FROM cards WHERE cardID = '" . $crud->escape($_GET['cardID']) . "'";
    $result = $crud->read($sql);
    if ($result)
    {
        $cardID = $crud->escape($_GET['cardID']);
//        Rank of the card
        $rank = $result[0]['rank_num'];
//        Suit of the card
        $suit  = $result[0]['suit'];
//        Color of the back of the card
        $backColor  = $result[0]['back_color'];
//        Price of the card
        $price  = $result[0]['price'];
//        card origin date
        $date  = $result[0]['year'];
//        image path
        $image  = $result[0]['image_path'];
        require './templates/productPage.php';
    }
}

require './templates/footer.php';
?>
