<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                        <form class="rounded" action="signinAction.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="l_email" id="email-add" placeholder="name@example.com">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="l_password" id="npass" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" id="signin-btn" value="signin">Sign
                                    in</button>
                            </div>
                            <hr class="my-4">
                            <p class="text-center">Not a Member?<a href="signup.php" class="nav-link"> Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const email = document.getElementById("email-add");
        const pass = document.getElementById("npass");

        form.addEventListener("submit", (e) => {
            if (!/[0-9]/.test(pass.value)) {
                alert("Must contain a digit");
                e.preventDefault()
            }
        })

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>