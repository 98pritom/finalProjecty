<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        echo "<script>location.href='index.html'</script>";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Final project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center text-white fs-1 fw-bold bg-secondary m-0 p-2">My Cart</h3>

    <div class="container-fluid">
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Remove from Cart</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';
                    $allData = mysqli_query($conn, "SELECT * FROM `cart` WHERE 1");

                    while ($row = mysqli_fetch_array($allData)) {
                        echo "<tr>
                            <td>$row[product_id]</td>
                            <td>$row[product_name]</td>
                            <td>$row[product_price]</td>
                            <td><img src='$row[product_image]' width='100px'></td>
                            <td><a class='btn btn-danger px-5' href='delete_item.php? id=$row[id]'>Remove</a></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>