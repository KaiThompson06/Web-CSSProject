<!-- add the header -->
<?php
$title = "Search";
$description = "Search page for finding cards";
include './templates/header.php';
?>
<main class="basic">
        <form action="search.php" method="get" class="mobileSearch">
            <input type="text" name= 'search' placeholder="Search.." >
        </form>
    <?php
    //    get crud access
        require_once 'crud.php';
        require_once 'utilites.php';
        $crud = new crud();
        $util = new utilites();
        $searchTerm = strtoupper($crud->escape($_GET['search']));
        $sql = "SELECT * FROM cards WHERE rank_num = ";
//        do some processing to accept a search for a suit, number or a combination
        $stringSegments = explode(" ", $searchTerm);

        if(count($stringSegments) == 1) {
            $sql .= "'" . $util->rankWordToNum($searchTerm). "' OR suit LIKE '%" .$searchTerm. "%'";
        }
        elseif (count($stringSegments) == 2) {
            $sql .= "'" . $util->rankWordToNum($stringSegments[0]) . "' AND suit LIKE '%" . $stringSegments[1] . "%'";
        }
        elseif (count($stringSegments) == 3) {
            $sql .= "'" . $util->rankWordToNum($stringSegments[0]) . "' AND suit LIKE '%" . $stringSegments[2] . "%'";
        }
        else {
            $sql = "SELECT * FROM cards";
        }

        $sql .= " ORDER BY price DESC LIMIT 35";
        $results = $crud->read($sql);



        if(!$results) {
            echo "<div class='error'>No results</div>";
            exit();
        }
        echo '<div class="searchResults">';
        foreach ($results as $result) {

//            ID of the card
              $cardID = $result['cardID'];
//            Rank of the card
//            $rank
              $rank = $util->rankWordToNum($result['rank_num']);
//            Suit of the card
//            $suit
              $suit = $result['suit'];
//            Color of the back of the card
//            $backColor
              $backColor = $result['back_color'];
//            Price of the card
//            $price
              $price = $result['price'];
//            card origin date
//            $date
              $date = $result['year'];

              include './templates/card.php';
        }
        echo "</div>";
        ?>
    </div>
</main>
<!-- add the footer -->
<?php
include './templates/footer.php';
?>