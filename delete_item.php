<?php
include 'config.php';
$id = $_GET['id'];
echo $id;

$deleteQuery = "DELETE FROM cart WHERE id='$id'";
mysqli_query($conn, $deleteQuery);

header("location:cart.php");