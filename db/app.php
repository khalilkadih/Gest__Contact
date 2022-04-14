<?php

session_start();
define("db_host","localhost");
define("db_user","root");
define("db_password","");
define("db_databasename","gestioncontact");
define('SITE_URL','https://localhost/GEST__CONTACT/');

include_once('db.php');

$db=new db_conexion;

    function base_url($slug)
    {
        echo SITE_URL.$slug;    
    }

function validateInput($dbcnx,$input)
{

    return  mysqli_real_escape_string($dbcnx,$input);
}
function redirect($message,$page)
{
    $redirectTo=SITE_URL.$page;
    $_SESSION['message']="$message";
    header("Location: $redirectTo");
    exit(0);
}
    
?>