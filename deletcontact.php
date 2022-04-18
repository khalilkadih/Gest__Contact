<?php

include_once('db/app.php');
include_once('./controller/controllContact.php');


if(isset($_POST['id_contact']))
{   
    print_r($_POST);
    $id_contact=validateInput($db->cnx,$_POST['id_contact']);
    $contact = new controllContact;
    $res=$contact->deletContact($id_contact);
    if($res){
         redirect('Contact deleted Successfully','contact.php');
    }
    else 
    {
         redirect('Something Wrong','profil.php');
    }


}




?>