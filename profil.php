<?php 


include_once('db/app.php');
include_once("code/authentification_code.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include('navBar.php')?>

<main>

<div class="container">
    <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="fw-bold">Welcome ,Khalil !</h1>
                            <div class="fw-bold p-3">
                                <div class="card" style="width:200 em;">
                                        <div class="card-header">
                                        your profile: 
                                        </div>
                                             <ul class="list-group list-group-flush">
                                                <li class="list-group-item"> <span class="fw-bold">Username:</span> <span class="fw-lighter">khalil</span>   </li>
                                                <li class="list-group-item"><span class="fw-bold">signup date:</span> <span class="fw-lighter">sun,07 apr 2019 16:11:25 +0000</span> </li>
                                                <li class="list-group-item"> <span class="fw-bold">last login:</span> <span class="fw-lighter">sun,07 apr 2019 16:11:25 +0000</span> </li>
                                            </ul>
                                        </div>
                            </div> 
                    </div>
                </div>
         </div>
    </div>
</div>

</main>
    
</body>
</html>