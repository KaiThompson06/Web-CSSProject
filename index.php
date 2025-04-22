<?php
$title = "Home";
$description = "Home Page";
include './templates/header.php';

?>


<main class="basic">
    <div class="masthead">
        <h2>Every Card Tells a Story.</h2>
        <p>Discover rare and individual playing cards
            curated, preserved, and made
            available one card at a time.</p>
        <svg>
            <line x1="10" y1="50" x2="10" y2="100" ></line>
        </svg>
    </div>

<section id="TopCards">
    <h2>
        Top Cards
    </h2>

    <div class="searchResults">
        <?php
        //    get crud access
        require_once 'crud.php';
        require_once 'utilites.php';
        $crud = new crud();
        $util = new utilites();


        $sql = "SELECT * FROM cards";
        $sql .= " ORDER BY price DESC LIMIT 3";
        $results = $crud->read($sql);
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
        ?>
    </div>
</section>

<section id="testimonials">
    <h2>
        User Reviews
    </h2>
    <div>
        <div>
            <p>“I found the missing King of Clubs from my 1880 deck — thank you!”</p>
            <div>
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/goldStar.svg" alt="star" class="star">
            </div>
            <h4>Sharen G.</h4>
        </div>
        <div>
            <p>“As a card collector, I love that I can pick up just the cards I’m missing without having to buy a full deck. Found a vintage Joker I’d been hunting for!”</p>
            <div>
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/goldStar.svg" alt="star" class="star">
                <img src="./images/greyStar.svg" alt="star" class="star grey">
            </div>
            <h4>Larry K.</h4>
        </div>
    </div>
</section>
</main>

<!-- add the footer -->
<?php
include './templates/footer.php';
?>
