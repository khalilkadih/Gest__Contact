<?php

include_once('db/app.php');
include_once('./controller/controllContact.php');

if(isset($_POST['SaveContact']))
{

    $dataInput=
    [
        'flname'=>validateInput($db->cnx,$_POST['flname']),
        'phone'=>validateInput($db->cnx,$_POST['phone']),
        'email'=>validateInput($db->cnx,$_POST['email']),
        'adress'=>validateInput($db->cnx,$_POST['adress']),
    ];
}


$contact=new controllContact();
$dataContactToInsert=$contact->InsertContact($dataInput);
// echo $dataContactToInsert;

if($dataContactToInsert){
    redirect('Contact added successfully','contact.php');
}
else{

    redirect('something Wrong !!! ,please Try Again ','contact.php');
}

?>