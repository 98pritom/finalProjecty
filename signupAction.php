<?php
include 'config.php';
$r_name = $_POST['name'];
$r_email = $_POST['email'];
$r_newPassword = $_POST['npass'];
$r_confirmPassword = $_POST['cpass'];

$find_user = mysqli_query($conn, "SELECT * FROM `registration` WHERE email='$r_email'");

if(!($r_newPassword == $r_confirmPassword)){
    echo "<script>alert('Password does not match')</script>";
}
else if(mysqli_num_rows($find_user) > 0){
    echo "<script>alert('Email already exist')</script>";
    echo "<script>location.href='signup.php'</script>";
}
else{
    $insert_query = "INSERT INTO `registration`(`name`, `email`, `password`) VALUES ('$r_name','$r_email','$r_newPassword')";
    if(!mysqli_query($conn,$insert_query)){
        die("Not inserted!!");
    }else{
        echo "<script>alert('Inserted')</script>";
        echo "<script>location.href='signin.php'</script>";
    }
}
?>