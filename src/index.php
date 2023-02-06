<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Local Bazzar</title>
    <link rel="stylesheet" type="text/css" href="styles/home.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav">
           <a href="./app.js"> <img src="./Img/logo.png" class="brand-logo"  alt=""></a>            
           <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="Search...">
                    <button class="search-btn"><img src="./Img/Serch.png"></button>
                </div>
                <a href="./login.php"><img src="./Img/Acont.png" alt=""></a>
                <a href="#"><img src="./Img/Cart.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-items"><a href="#" class="link">Home</a></li>
            <li class="link-items"><a href="#" class="link">Products</a></li>
            <li class="link-items"><a href="#" class="link">Service</a></li>
            <li class="link-items"><a href="#" class="link">About</a></li>
            <li class="link-items"><a href="#" class="link">Contacts</a></li>
        </ul>
    </nav>

    <!-- hero section -->
    <header class="hero-section">
        <div class="content">
            <p class="sub-heading">Best way to buy eco and locally!</p>
            <button class="heading-btn">Shop Now</button>
        </div>
    </header>

    <!-- card containers  -->
    <section class="products">
        <h2 class="product-category">Most recommended </h2>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">

                    <img src="Img/card1.png" class="product-thumb" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>