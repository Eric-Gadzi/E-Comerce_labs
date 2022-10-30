<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SIGN UP</title>
</head>

<body>

    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Sign Up</h2>


                        <form method = "POST" action = "registerprocess.php">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" name = "fname" class="form-control" id="fname" placeholder="Kofi">
                                        <label for="fname">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name = "lname" id="lname" placeholder="name@example.com">
                                        <label for="lname">Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name = "country" id="Country" placeholder="name@example.com">
                                        <label for="Country">Country</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name = "city" id="City" placeholder="name@example.com">
                                        <label for="City">City</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput_email" name = "contact">
                                <label for="floatingInput_email">Contact</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="floatingInput_email" placeholder="name@example.com" name = "email">
                                <label for="floatingInput_email">Email address</label>
                            </div>
                            <!-- Password input -->
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name = "password" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>

                            <!-- <div class="form-group mb-3">
                                <label for="customFile" class="form-label">Upload an Image</label>
                                <input type="file" class="form-control" id="customFile" placeholder="upload image" name = "image">

                            </div> -->

                            <!-- Submit button -->
                                <div class="d-grid gap-2">
                                    <button type="submit" name = "register" class="btn btn-primary" type="button">Register</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>