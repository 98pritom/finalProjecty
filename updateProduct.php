<?php
include 'config.php';
$id = $_GET['id'];
echo $id;

$dataFetchQuery = "SELECT * FROM `products` where id='$id'";

$record = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($record);

session_start();

if (isset($_SESSION['email'])) {
    // echo "<script>alert('You are successfully logged in!!')</script>";
} else {
    echo "<script>alert('Invalid user')</script>";
    echo "<script>location.href='signin.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Update Product</h5>
                        <form action="updateProductAction.php" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="product-name" placeholder="Product Name" value="<?php echo $data['name'] ?>">
                                <label for="floatingInput">Product Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="<?php echo $data['price'] ?>">
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="mb-4">
                                <input type="file" class="form-control" name="image" required value="<?php echo $data['image'] ?>">
                            </div>
                            <div class="mb-4">
                                <img src="<?php echo $data['image'] ?>" alt="" width="100px">
                            </div>
                            <div class="d-grid">
                                <input type="hidden" name='id' value="<?php echo $data['id'] ?>">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" id="upload-btn" value="submit">Upload</button>
                            </div>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include 'config.php';
    $allData = mysqli_query($conn, "SELECT * FROM `products`");
    while ($row = mysqli_fetch_array($allData)) {
        echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><img src='$row[image]' width='100px'></td>
                        <td><a class='btn btn-warning mt-3' href='updateProduct.php? id=$row[id]'>Update</td>
                        <td><a class='btn btn-danger mt-3' href='update.php'>Delete</td>
                    </tr>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>