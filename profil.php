<?php 

include_once('controller/AuthentificationController.php');
// $authentificated= new AuthentificationController;
$userdata=$authentificated->userDetail();



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
                        <h1 class="fw-bold">Welcome ,<?php echo $userdata['firstName'];?> !</h1>
                            <div class="fw-bold p-3">
                                <div class="card" style="width:200 em;">
                                        <div class="card-header">
                                        your profile: 
                                        </div>
                                             <ul class="list-group list-group-flush">
                                                <li class="list-group-item"> <span class="fw-bold">Username:</span> <span class="fw-lighter"><?php echo $userdata['firstName']." ".$userdata['firstName'];?></span>   </li>
                                                <li class="list-group-item"><span class="fw-bold">signup date:</span> <span class="fw-lighter"><?php echo $userdata['created_At'];?></span> </li>
                                                <li class="list-group-item"> <span class="fw-bold">last login:</span> <span class="fw-lighter"><?php echo $userdata['created_At'];?></span> </li>
                                            </ul>
                                        </div>
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