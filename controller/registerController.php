<?php

        // include('db/app.php');
        class registerController
        {

                public function __construct()
                {
                    $db=new db_conexion();
                    $this->cnx=$db->cnx;
                    
                }

                    public function registeration($fname,$lname,$email,$password)
                {

                    $registerQuery="INSERT INTO user(firstName, lastName, email, Password) 
                    VALUES ('$fname','$lname','$email','$password')";
                    $results=$this->cnx->Query($registerQuery);
                    return $results;

                }

                public function isUserExist($email)
                {

                    $checkUser="SELECT email from user where email='$email' limit 1";
                    $result=$this->cnx->Query($checkUser);
                    if($result->num_rows >0){

                            return true;

                    }
                    else {return false;}

                }


                public function checkPasswordConfirmation($paswords,$confPassword){


                    if($paswords == $confPassword)
                    {
                        return true;

                    }
                    else
                    {
                        return false;
                    }
                }
        }
?>