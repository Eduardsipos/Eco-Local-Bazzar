<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Local Bazzar</title>
    <link rel="stylesheet" type="text/css" href="./styles/home.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav">
            <img src="./Img/Logo.png" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="Search...">
                    <button class="search-btn"><img src="./Img/Serch.png"></button>
                </div>
                <a href="#"><img src="./Img/Acont.png" alt=""></a>
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

    <header class="hero-section">
        <div class="login">
            <h1>Welcome</h1>
            <ul>
                <form method="POST" action="Includes/login.inc.php">

                    <h4>Username</h4>
                    <input type="text" name="username" placeholder="Username"><br>
                    <h4>Password</h4>
                    <input type='password' name='pwd' placeholder='Password'><br><br>

                    <input type="submit" value="Log in">
                    <a href="signup.php"><img>Register</a>

                </form>
                <?php
                if (isset($_GET['info']) && $_GET['info'] == 'wrong_password') {
                    echo '<p style="text-align: center; color: red; font-size: 20px;">Username or pasword is wrong! </p>';
                }
                if (isset($_GET['info']) && $_GET['info'] == 'nothing') {
                    echo '<p style="text-align: center; color: red; font-size: 20px;">nu ai introdus nimic  </p>';
                }
                if (isset($_GET['info']) && $_GET['info'] == 'error hash') {
                    echo '<p style="text-align: center; color: red; font-size: 20px;">pila  </p>';
                }
                ?>

            </ul>
        </div>
    </header>
    <div class="middle zone two">




</body>

</html>