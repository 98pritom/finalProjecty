<?php
    include 'config.php';
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    echo $name;
    
    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $image_des = "image" . $imageName;
    move_uploaded_file($imageLocation, $image_des);
    
    
    $updateQuery = "UPDATE `products` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id='$id'";
    
    if (mysqli_query($conn, $updateQuery)) {
    
        echo "<script>alert('updated!!!')</script>";
        echo "<script>location.href='insert-product.php'</script>";
    }else{
      echo "<script>alert('not updated!!!')</script>";
    }
