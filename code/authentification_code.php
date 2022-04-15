<?php


// include_once('db/app.php');
// include_once('controller/registerController.php');
include_once('controller/registerController.php');
include_once('controller/loginController.php');


$signin = new loginController;

if (isset($_POST['logout_btn'])) {
    $checklogoutuser = $signin->logout();
    if ($checklogoutuser) {
        redirect('Logged out successefully', 'signin.php');
    } else {
        return  false;
    }
}

if (isset($_POST['login'])) {


    $email = validateInput($db->cnx, $_POST['email']);
    $password = validateInput($db->cnx, $_POST['password']);
    $checklogin = $signin->userLogin($email, $password);
    if ($checklogin) {

        redirect("Welcome to home page", "contact.php");
    } else {
        redirect("Eamil or password is not valid ", "signin.php");
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
            redirect("already email exist", "signup.php");
        } else {
            $registerQuery = $register->registeration($fname, $lname, $email, $password);
            if ($registerQuery) {

                redirect("Registred successfully", "signin.php");
            } else {
                redirect("Somthing is wrong", "signup.php");
            }
        }
    } else {

        redirect("Password and confirm password Not Match", "./signup.php");
    }

    $resultOfEmail = $register->isUserExist($email);
}
