<?php 
include_once('db/app.php');
include_once("code/authentification_code.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact List</title>
</head>
<body>
    
    <?php include('navBar.php')?>

    <main>

        <div class="container">
            <div class="row">
                <div class="col">
                
                    <?php include('message.php') ?>

                    <div class="card shadow w-80">
                        <div class="card-body">
                            <h1 class="fw-bold">Contacts !</h1>
                            <h5>No contacts</h5>
                            <h3>Add Contact:</h3>
                            <div class="input-group">
                                    <div class="m-3">
                                        <label for="email" class="form-label">Name</label> 
                                        <input type="text" aria-label="First name" class="form-control m-1">
                                    </div>
                                    <div class="m-3">
                                        <label for="email" class="form-label">phone</label>
                                        <input type="text" aria-label="Last name" class="form-control m-1"> 
                                    </div>        
                            </div>
                            <div class=" ms-4 mb-3 form-group">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="Email" class="form-control w-50" name="email" placeholder="Enter your Email"  id="ToOpenPage" required>
                            </div>  
                            <div class="ms-4 mt-4 form-floating">
                                <input type="text" class="form-control w-50" id="floatingInputGrid" placeholder="" value="">
                                <label for="floatingInputGrid">Address</label>
                            </div>
                            <button type="submit" class=" ms-4 bbtn btn-primary w-30 fw-bold mt-3">Submit</button>

                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
</body>
</html>