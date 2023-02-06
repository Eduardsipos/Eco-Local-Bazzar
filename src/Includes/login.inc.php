<?php
session_start();
require 'connect.php';

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['pwd']) && !empty($_POST['pwd'])) {

    $username = strtolower($_POST['username']);
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connect, $sql);
    $row = $result->fetch_assoc();
    $hash = $row['pwd'];
    $hash = substr( $hash, 0, 60 );

    if (password_verify($_POST['pwd'], $hash)) {
        
        $sql = "SELECT * FROM users WHERE username='$username' AND pwd='$hash'";
        $result = mysqli_query($connect, $sql);
        if (!$row = $result->fetch_assoc()) {
            echo 'User or password are not in the database!';
        } else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

        }
        header("Location:../index.php?");
        
        die();
    } else {
       header("Location: ../login.php?info=wrong_password");
    }
}else {
    echo '<p style="text-align: center; color: red; font-size: 20px;">empty filed </p>';
}

