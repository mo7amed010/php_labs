<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 bg-light m-auto rounded-top bor-top">
                <h2 class="text-center pt-3">Sign Up Now</h2>
                <form action="show_data.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Enter your Name"
                            aria-label="Name">
                        <div class="error"></div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Enter your Email"
                            aria-label="Email">
                        <div class="error"></div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" id="pass" name="pass" class="form-control"
                            placeholder="Enter your Password" aria-label="Password">
                        <div class="error"></div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="confPass" placeholder="Confirm your Password"
                            aria-label="Password">
                        <div class="error"></div>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <br>
    <br>
    <br>

    <section class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 bg-light m-auto rounded-top bor-top">
                <h2 class="text-center pt-3 mb-3">Login</h2>

                <form action="show_data.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password"
                            aria-label="Password">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Login</button>
                        <p class="text-center text-capitalize mt-3">Don't have Account? <a href="signup.html">Sing
                                up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>