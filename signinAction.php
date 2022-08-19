<?php
include 'config.php';

    $admin = "admin@gmail.com";
    $pass = "admin";

    $l_email = $_POST['l_email'];
    $l_pass = $_POST['l_password'];

    $result = mysqli_query($conn, "SELECT * FROM `registration` WHERE email = '$l_email' AND password = '$l_pass'");

    if($l_email==$admin && $l_pass==$pass){
        session_start();
        $_SESSION['email'] = $admin;
        echo "<script>location.href='insert-product.php'</script>";
    }
    else if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['email'] = $l_email;

        echo "<script>location.href='home.php'</script>";
    } else {
        echo "<script>alert('Incorrect username or passowrd')</script>";
        echo "<script>location.href='signin.php'</script>";
    }

