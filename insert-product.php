<?php

include 'config.php';

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
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h2>FoodHut</h2>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark nav-link active ms-2" href="signOut.php">SignOut</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Insert Product</h5>
                        <form action="insertProductAction.php" method="POST" id="form" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="product-name" id="product-name" placeholder="Product Name">
                                <label for="floatingInput">Product Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="mb-4">
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" id="upload-btn" value="submit">Upload</button>
                            </div>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
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
                        <td><a class='btn btn-danger mt-3' href='deleteProductAction.php? id=$row[id]'>Delete</td>
                    </tr>";

                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>