<?php


// include_once('db/app.php');
// include_once('controller/registerController.php');
include_once('controller/registerController.php');
include_once('controller/loginController.php');


$signin = new loginController;

if (isset($_POST['logout_btn'])) {
    $checklogoutuser = $signin->logout();
    if ($checklogoutuser) {
        redirect('Logged out successefully','signin.php','success');
    } else {
        return  false;
    }
}

if (isset($_POST['login'])) {


    $email = validateInput($db->cnx, $_POST['email']);
    $password = validateInput($db->cnx, $_POST['password']);
    $checklogin = $signin->userLogin($email, $password);
    if ($checklogin) {

        redirect("Welcome to home page", "contact.php",'success');
    } else {
        redirect("Eamil or password is not valid ", "signin.php",'danger');
    }
}


if (isset($_POST["submit"])) {


    $fname = validateInput($db->cnx, $_POST['firstName']);
    $lname = validateInput($db->cnx, $_POST['lastName']);
    $email = validateInput($db->cnx, $_POST['email']);
    $password = validateInput($db->cnx, $_POST['password']);
    $cnf_password = validateInput($db->cnx, $_POST['conf_pwd']);

    $register = new registerController;

    $resultOfPassword = $register->checkPasswordConfirmation($password, $cnf_password);
    if ($resultOfPassword) {

        $resultsOfUser = $register->isUserExist($email);
        if ($resultsOfUser) {
            redirect("already email exist", "signup.php",'danger');
        } else {
            $registerQuery = $register->registeration($fname, $lname, $email, $password);
            if ($registerQuery) {

                redirect("Registred successfully", "signin.php","success");
            } else {
                redirect("Somthing is wrong", "signup.php",'danger');
            }
        }
    } else {

        redirect("Password and confirm password Not Match", "./signup.php",'danger');
    }

    $resultOfEmail = $register->isUserExist($email);
}
