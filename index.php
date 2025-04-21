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

<section id="BestSellers">
    <h2>
        Best Sellers
    </h2>

    <div class="carrossel">
<!--        <div class="carrossel-arrow-left"></div>-->
        <div class="carrossel-item">
            <?php
//                id of the card
                $cardID = 0;
                //Rank of the card
                $rank = 1;
                //Suit of the card
                $suit = "DIAMONDS";
                //Color of the back of the card
                $backColor = "gray";
                //Price of the card
                $price = 25.00;
                //card origin date
                $date = 2025;
                include './templates/card.php';
            ?>
        </div>
        <div class="carrossel-item">
            <?php

//                id of the card
            $cardID = 0;
            //Rank of the card
            $rank = 1;
            //Suit of the card
            $suit = "CLUBS";
            //Color of the back of the card
            $backColor = "blue";
            //Price of the card
            $price = 250.00;
            //card origin date
            $date = 2001;
            include './templates/card.php';
            ?>
        </div>
        <div class="carrossel-item">
            <?php

//                id of the card
            $cardID = 0;
            //Rank of the card
            $rank = 1;
            //Suit of the card
            $suit = "HEARTS";
            //Color of the back of the card
            $backColor = "red";
            //Price of the card
            $price = 57.00;
            //card origin date
            $date = 2015;
            include './templates/card.php';
            ?>
        </div>
        <div class="carrossel-item">
            <?php

//                id of the card
            $cardID = 0;
            //Rank of the card
            $rank = 1;
            //Suit of the card
            $suit = "SPADES";
            //Color of the back of the card
            $backColor = "gray";
            //Price of the card
            $price = 575.00;
            //card origin date
            $date = 2025;
            include './templates/card.php';
            ?>
        </div>
<!--        <div class="carrossel-arrow-right"></div>-->
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
