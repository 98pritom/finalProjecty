<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up</h5>
                        <form class="rounded" id="form" action="signupAction.php" method="post">
                        <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fname" name="name" placeholder="First Name">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email-add" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="npass" name="npass" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password">
                                <label for="floatingPassword">Confirm Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="signup" id="signup-btn">Sign
                                    up</button>
                            </div>
                            <hr class="my-4">
                            <p class="text-center">Already a Member?<a href="signin.php" class="nav-link"> Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const firstName = document.getElementById("fname");
        const lastName = document.getElementById("lname");
        const email = document.getElementById("email-add");
        const pass = document.getElementById("npass");
        const num = document.getElementById("mnum");
        const confirmPass = document.getElementById("cpass");
        const form = document.getElementById("form");

        form.addEventListener("submit", (e) => {

            if (!/^[a-zA-Z .]+$/.test(firstName.value)) {
                alert("First name can not contain number");
                e.preventDefault()
            }

            if (!/^[a-zA-Z .]+$/.test(lastName.value)) {
                alert("Last name can not contain number");
                e.preventDefault()
            }

            if (!/^(\+88-|\+88)?01[3-9]\d{8}$/.test(num.value)) { /// +88
                alert("Must be a Bangladeshi number");
                e.preventDefault();
            }

            if (!/[0-9]/.test(pass.value)) {
                alert("Must contain a digit");
                e.preventDefault()
            }

            if (pass.value != confirmPass.value) {
                alert("Password does not match");
                e.preventDefault()
            }
        })

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>