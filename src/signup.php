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
        <br />
        <div class="login">
            <h1>Welcome to our web site!</h1>
            <form method="POST" action="./Includes/sign.inc.php">
                <h6>First-Name</h6>
                <input type="text" name="firstname" placeholder="First-Name">
                <h6>Last-Name</h6>
                <input type="text" name="lastname" placeholder="Last-Name">
                <h6>Username</h6>
                <input type="text" name="username" placeholder="Username">
                <h6>Password</h6>
                <input type='password' name='pwd' placeholder='Password'>
                <h6>Email</h6>
                <input type="email" name="email" placeholder="Email"><br><br>
                <input type="submit" name="Register" value="Register">
            </form>
            <?php
            if (isset($_GET['info']) && $_GET['info'] == 'ok') {
                echo '<p style="text-align: center; color: green; font-size: 20px;">Your account has been create successfully!</p>';
            }else if (isset($_GET['info']) && $_GET['info'] == 'error'){
                echo '<p style="text-align: center; color: red; font-size: 20px;">Something went wrong!</p>';
            } else if (isset($_GET['info']) && $_GET['info'] == 'existant') { 
                echo '<p style="text-align: center; color: red; font-size: 20px;">This accout it is existant</p>';    

               
            }
            ?>

        </div>
    </header>
    

</body>

</html>