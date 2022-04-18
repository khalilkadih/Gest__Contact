<?php

use LDAP\Result;

class controllContact
{
    public function __construct()
    {
            $db= new db_conexion();
            $this->cnx=$db->cnx;
    }

    public function getContact()
    {

        $contatcQuery= " SELECT * FROM contact";
        $result=$this->cnx->query($contatcQuery);

    //    $contactData= $result->fetch_assoc();
        if($result->num_rows > 0){

            // print_r($result->fetch_assoc());
            return $result;
        }
        else
        {

            return false;
        }

    }

public function InsertContact($inputdata)
{
    $data = "'" . implode ( "','", $inputdata) . "'";
    echo $data;

    $contactQuery="INSERT INTO contact(`name`, `phone`,`email`,`adress`) VALUES ($data)";
    $result=$this->cnx->Query($contactQuery);
    if($result){
        return true;
    }
    else{
        return false;
    }
}

public function updatecontact($inputdata,$id_contact)
{
   
    $id_contact=validateInput($this->cnx,$_POST['id_contact']);
    $flname=$inputdata['flname'];
    $phone=$inputdata['phone'];
    $adress=$inputdata['adress'];
    $email=$inputdata['email'];
    
    
    $contactUpdateQuery=" UPDATE contact SET name='$flname',phone='$phone',adress='$adress',email='$email' WHERE id_contact='$id_contact' LIMIT 1";
    $result=$this->cnx->query($contactUpdateQuery);
    
    if($result){

        return true;
    }
    else
    {
        return false;
    }






}

public function deletContact($id_contact){
    $id_contact =validateInput($this->cnx,$_POST['id_contact']);
    // $id_contact=7;
    $contactDeleteQuery=" DELETE FROM contact WHERE id_contact='$id_contact' ";
    $resul=$this->cnx->query($contactDeleteQuery);
    if($resul){return true;}
    else{return false;}
}
}


?>