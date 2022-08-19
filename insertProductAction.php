<?php
$name = $_POST['product-name'];
$price = $_POST['price'];
$image = $_FILES['image'];

include 'config.php';

$imageName = $image['name'];
$image_location = $image['tmp_name'];
$imageDes = "image/" . $imageName;
// echo $image_location;
// echo $imageDes;

move_uploaded_file($image_location, $imageDes);

$insertQuery = "INSERT INTO `products`(`name`, `price`, `image`) VALUES ('$name','$price','$imageDes')";

if (!mysqli_query($conn, $insertQuery)) {
    echo "<script>alert('Not Inserted')</script>";
    echo "<script>location.href='insert-product.php'</script>";
} else {
    // echo "<script>alert('Inserted')</script>";
    echo "<script>location.href='insert-product.php'</script>";
}
