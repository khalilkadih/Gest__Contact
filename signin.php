<?php
include_once('db/app.php');
include_once("code/authentification_code.php");
$signin->islogged();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign in</title>
</head>
<body>
            <?php include('navBar.php')?>

            <main class="container-fluid ">
                <section class="row ">
                    <div class="col-12 col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 mt-5 pt-5">
                       
                    <?php include('message.php') ?>
                                        
                    <div class="card shadow ">
                            <div class="card-body p-5 ">
                                <h1 class="text-start border-start border-5 border-primary ps-1 fw-bold">Gestion Contact</h1>
                                <h2 class="h3 text-center text-uppercase mb-3 fw-bold">Sign in </h2>
                                <p class="text-center "> Enter your credentials to access your account </p>
                                <form method="POST" action="">                   
                                    <div class="mb-3 form-group">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="Email" class="form-control" name="email" placeholder="Enter your Email"  id="ToOpenPage" required>
                                     </div>
                                    
                                    <div class="mb-3 form-group">
                                        <label for="PasswortInput" class="form-label mt-1">Password :</label>
                                        <input type="password" name="password"  placeholder="Enter your Password" class="form-control" required id="PasswortInput">
                                    </div>
                                    <!-- <div class="form-check mb-3">
                                        <input class="form-check-input" name='remember_me'type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div> -->

                                    <button type="submit" name="login" class="btn btn-primary w-100 fw-bold">Login</button>
                                </form>
                            </div>
                            <div class="text-center"> 
                                <span class="">
                                No account?
                                </span>
                                <a href="signup.php" class="">Sign up</a> <span class="mt-3">here.</span>

                            </div>
                        </div>

                </section>
                
            </main>

</body>
</html>