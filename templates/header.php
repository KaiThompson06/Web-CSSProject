<!DOCTYPE html>
<html lang="en">
<head>
    <!-- all meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Kai Thompson">
    <title><?php echo $title ?></title>
    <!-- link to the css file -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- link to the js file -->
    <script src="./js/scripts.js" defer></script>
    <!-- link to font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
<!-- add the header -->
<header>
    <h1><a href="./index.php">Drawn</a></h1>
    <nav class="desktop-nav">
        <menu>
            <li><a href="search.php?search=">Shop</a></li>
            <li>
                <form action="search.php" method="get">
                    <input type="text" name= 'search' placeholder="Search.." >
                </form>
            </li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="cart.php">Cart</a></li>
        </menu>
    </nav>

    <nav class="mobile-nav">
        <input type="checkbox" class="hidden" name="hamMenu" id="hamMenu">
        <label for="hamMenu">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <menu>
            <li><a href="search.php?search=">Shop</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="cart.php">Cart</a></li>
        </menu>
    </nav>

</header>