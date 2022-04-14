<?php

include_once('app.php');
class db_conexion
{

    public function __construct()
    {
        $cnx=new mysqli(db_host,db_user,db_password,db_databasename);
    
    
        if($cnx->connect_error)
        {


        die("<h1> Database connection failed </h1>");

        }

            return $this->cnx=$cnx;
    }

    
}

?>