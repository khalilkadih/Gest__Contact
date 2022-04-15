<?php 
include_once('db/app.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>page d'acceuill</title>
</head>
<body>
         <?php include_once('navBar.php')?>
        <main>
            <div class="container">
                <div class="row">
                        <div class="col">
                            <?php include('message.php') ?>
                            <div class="card shadow">
                                <div class="card-body">
                                    <h1 class="fw-bold">
                                        Hello !
                                    </h1>
                                        <div class="text-center fw-bold p-3">
                                            <a href="signup.php">sign up</a> to start creating your contacts list.
                                            <p class="p-3 m-3">already have an account ? <a href="signin.php">login here</a></p>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>