<?php
    include 'config.php';
    $id = $_GET['id'];
    echo $id;

    $deleteQuery = "DELETE FROM `products` WHERE id='$id'";

    mysqli_query($conn,$deleteQuery);

    header("location:insert-product.php");
?>