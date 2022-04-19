<?php 
include_once('db/app.php');
include_once('controller/controllContact.php');



// $authentificated= new AuthentificationController;
// $userdata=$authentificated->userDetail();
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">  

                    
                                    <?php include('message.php');?>
                     
                    <div class="card shadow w-80 ">
                        <div class="card-body">
                                 <h1 class="fw-bold">Contacts !</h1>
                                 <?php include('message.php') ?>
                                 <h5>No contacts</h5>
                                 <h3>Add Contact:</h3>
                            <form action="insertContact.php" method="POST">
                                <div class="input-group">
                                    <div class="m-3">
                                        <label for="name" class="form-label">Full Name</label> 
                                        <input type="text" aria-label="Firstname" name="flname" id="name" class="form-control m-1" require >
                                    </div>
                                    <div class="m-3">
                                        <label for="email" class="form-label">phone</label>
                                        <input type="text" aria-label=""  name="phone" class="form-control m-1" require > 
                                    </div>        
                                </div>
                                 <div class=" ms-4 mb-3 form-group">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="Email" class="form-control w-50" name="email" placeholder="Enter your Email"  id="ToOpenPage" required >
                                </div>  
                                <div class="ms-4 mt-4 form-floating">
                                     <input type="text" class="form-control w-50" id="floatingInputGrid" name="adress"  require >
                                     <label for="floatingInputGrid">Address</label>
                                </div>

                                 <button type="submit" name="SaveContact" class=" ms-4 bbtn btn-primary w-30 fw-bold mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 ">
<!-- ################################################################################################################################# -->
                <!-- start modal -->
              
                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> Update Contact</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="updateContact.php" method="POST">

                                                        <div class="modal-body">
                                                            
                                                            <input type="hidden" name="id_contact" class="id_contact"/>

                                                            <div class="form-group">
                                                                <label for="flname" class="form-label">full name:</label>
                                                                <input type="text" name="flname" class="flname form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="text" class="form-control email" name="email"
                                                                    >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="text" class="phone form-control" name="phone"
                                                                    >
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="adress" class="form-label">Adress</label>
                                                                <input type="text" class="adress form-control"
                                                                    name="adress">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="updatedata" class="btn btn-primary">Update Contact</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                <!-- end modal  -->
                <!-- ######################################################################################################### -->
                <!-- #####################################################start model delet################################################################### -->
                
                
                <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="deletcontact.php" method="POST">

                                                    <div class="modal-body">

                                                        <input type="hidden" name="id_contact" id="id_contact">

                                                        <h4> Do you want to Delete this Contact ??</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> NO </button>
                                                        <button type="submit" name="deletedata" class="btn btn-primary">  Delete </button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                </div>
                
                
                
                
                
                <!-- #########################################################End modal delet###################################################################### -->
                         <table class="table">
                            <thead>
                                    <tr>
                                    <th scope="col">id</th>   
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Adress</th>
                                    <th>Update
                                    <th>Delete</th>
                                    </th>
                                    </tr>
                             </thead>
                          
                                    <tbody>
                                    <?php
                                    $readData=new controllContact();
                                    $showContact=$readData->getContact();
                                        if($showContact)
                                        {
                                            foreach($showContact as $row)
                                            {

                                                
                                                ?>


                                                <tr>
                                                        <td><?= $row['id_contact']?></td>
                                                        <td><?= $row['name']?></td>
                                                        <td><?= $row['email']?></td>      
                                                        <td><?= $row['phone']?></td>  
                                                        <td><?= $row['adress']?></td>   
                                                        <td>
                                                           <button type="button" data-bs-toggle="modalEdit" class="btn btn-success editbtn">EDIT</button>

                                                        </td> 
                                                        <td>
                                                        <button type="button" data-bs-toggle="modalEdit" class="btn btn-danger deletebtn">Delte</button>                                                            
                                                        </td>                                 
                                                </tr>

                                                    <?php
                                                    

                                            }
                                            
                                        }
                                        else{

                                            echo 'No data To show';
                                        
                                        }

                                        ?>
                                    </tbody>
                        </table>
                </div>
        </div>
    </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
            <script src="script.js"></script>
            <script>

$(document).ready(function(){

$('.deletebtn').on('click', function () 
{
     $('#deletemodal').modal('show');

     $tr = $(this).closest('tr');
     let contactId = $tr.children("td")[0].innerText;
     $('#deletemodal input').val(contactId);
     console.log('delete user with id '+contactId);
});
});


$(document).ready(function() {

    
$('.editbtn').on('click', function(e) {
  //  console.log(e.target);
    $('#editmodal').modal('show');

    $tr = $(this).closest('tr');
    // console.log($tr[0]);

    let data = $tr.children("td").map(function() {
        console.log(this);
        return $(this).text();
    }).get();
    
    // console.log(data);
    
    /////////////////////////

    let children=$tr.children();
    let id_contact=children[0].textContent;
     let name=children[1].textContent;
     let email=children[2].textContent;
    let phone=children[3].textContent;
     let adress=children[4].textContent;
    $('#editmodal .id_contact').val(data[0]);
    $('#editmodal .flname').val(data[1]);
    $('#editmodal .email').val(data[2]);
    $('#editmodal .phone').val(data[3]);
    $('#editmodal .adress').val(data[4]);
   
});       

});
</script>
</main>
</body>
</html>