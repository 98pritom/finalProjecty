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
    <header>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/73728a3c01.js" crossorigin="anonymous"></script>
            <title>Document</title>
        </head>

        <body>
            <header>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="contactus.php">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping fs-5 ms-2
                                    
                                    "></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-dark nav-link active ms-2" href="signOut.php">SignOut</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Navbar -->
            </header>

            <main>
                <div class="container" style="margin-top: 5rem;">
                    <div class="row">
                        <?php
                        include 'config.php';
                        $allData = mysqli_query($conn, "SELECT * FROM `products`");
                        while ($row = mysqli_fetch_array($allData)) {
                            echo "<div class='col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3' >
                        <div class='card m-3'>
                            <img style='height: 15rem; object-fit: cover;' src='$row[image]' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h4 class='card-title'>$row[name]</h4>
                                <h5 class='card-title'>Price: $row[price]</h5>
                                
                                
                            </div>
                            <a href='cartAction.php ? id=$row[id]' class='btn btn-dark px-auto py-3'>Add To Cart</a>
                            </div>
                        </div>";
                        }
                        ?>
                    </div>
                </div>
            </main>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>

        </html>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>