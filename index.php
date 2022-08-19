<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73728a3c01.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <?php
      include 'navbar.php';
  ?>

  <section>
    <div class="container-fluid px-0 top-banner">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <h1>Order food from <br>favourote resturant <br>near you.</h1>
            <p>It's all at your fingertips – the restaurants and shops you love. Find the right food and groceries to suit your mood, and make the first bite last. Go ahead</p>
            <div class="mt-4 mb-5">
              <a href="signin.php"><button class="main-btn">Order Now <i class="fas fa-shopping-basket ps-3"></i></button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="">
  <!-- Footer -->
  <footer class="text-center text-white bg-dark footer">
    <div class="container p-4 pb-0">
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <a href="signup.php"><button type="button" class="btn btn-outline-light btn-rounded">
            Sign up!
          </button></a>
        </p>
      </section>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="#">FoodHut</a>
    </div>
  </footer>
  <!-- Footer -->
</section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>