<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "Pritom";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("connection failerd : " . mysqli_connect_error());
    }
    else{
        // echo "<script>alert('DBconnected')</script>";
    }