<?php
require 'connect.php';

if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['pwd']) && !empty($_POST['email'])
&& isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['email'])
) {



    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = strtolower( $_POST['username']);
    $password = $_POST['pwd'];
    $email = $_POST['email'];

    //  $password_hashed = password_hash('$password', PASSWORD_DEFAULT);
    $hashToStoreInDb = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connect, $sql);
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        header("Location:../signup.php?info=existant");
        die();
    } else {


        $sql = "INSERT INTO users(firstname,lastname, username, pwd,email) VALUES('$firstname', '$lastname', '$username', '$hashToStoreInDb', '$email')";
        $result = mysqli_query($connect, $sql);

        header("Location: ../signup.php?info=ok");
    }               
}else{ 

    header("Location:../signup.php?info=error");
}