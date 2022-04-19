<?php

include_once('db/app.php');
include_once('./controller/controllContact.php');


if(isset($_POST['updatedata']))
{   

    $id_contact=validateInput($db->cnx,$_POST['id_contact']);

    $dataInput=
    [
        'flname'=>validateInput($db->cnx,$_POST['flname']),
        'phone'=>validateInput($db->cnx,$_POST['phone']),
        'email'=>validateInput($db->cnx,$_POST['email']),
        'adress'=>validateInput($db->cnx,$_POST['adress']),
    ];
    $contact = new controllContact;
    $res=$contact->updatecontact($dataInput,$id_contact);
    if($res){

        redirect('Contact Updated Successfully','contact.php','success');
    }
    else 
    {
        redirect('Something Wrong','profil.php','danger');
    }


}





?>