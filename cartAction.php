<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>location.href='index.html'</script>";
}


include 'config.php';
$product_id = $_GET['id'];
$dataFetchQuery = "SELECT * FROM `products` WHERE id=$product_id";
$record = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($record);

$product_name = $data['name'];
$product_price = $data['price'];
$product_image = $data['image'];

$insertProductQuery = "INSERT INTO `cart`(`product_id`, `product_name`, `product_price`, `product_image`) VALUES ('$product_id','$product_name','$product_price','$product_image')";

if (!mysqli_query($conn, $insertProductQuery)) {
    die("Not inserted!");
    echo "<script>location.href='productsAll.php'</script>";
} else {
    include 'cart.php';
    // echo "<script>alert('Data Inserted!!')</script>";
    echo "<script>location.href='cart.php'</script>";
}
