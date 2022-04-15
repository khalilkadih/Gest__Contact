    <?php
    include_once('db/db.php');
    $signin->islogged();

    ?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Sign up </title>
    </head>

    <body>

    <?php include('navBar.php')?>

        <main class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 mt-5 pt-5">
                    <div class="col">

                        <?php include('message.php') ?>

                        <div class="card shadow">
                            <div class="card-body p-5">
                                <div class=" text-center">
                                    <h2>Sign up</h2>
                                </div>
                                <form method="POST" action="">
                                    <div class="mb-3 mt-4">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="conf_pwd" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="conf_pwd" name="conf_pwd">
                                    </div>

                                    <button type="submit"  name="submit" class="bbtn btn-primary w-100 fw-bold">Submit</button>


                                </form>


                                <div class="text-center">
                                    <p class="fw-bold">
                                        If already have account sign in here
                                    </p>
                                    <a href="<?= base_url('signin.php')?>" class=" btn btn-primary w-50 mb-4">Sign in</a></span>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

    </html>