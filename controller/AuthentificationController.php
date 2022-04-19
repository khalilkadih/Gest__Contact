<?php 

include('db/app.php');

class AuthentificationController
{

    public function __construct()
    {
        $db= new db_conexion();
        $this->cnx=$db->cnx;
        $this->checkIsLoggedIn();
        
    }

    private function checkIsLoggedIn(){

        if(!isset($_SESSION['authenticated']))
        {
            redirect('Login to Access this Page','signin.php','success');
            return false;
        }
        else
        {
            return true;
        }
    }
    public function userDetail()
    {
        $checkUser=$this->checkIsLoggedIn();
        
        if($checkUser)
        {
            $user_id= $_SESSION['auth_user']['user_id'];
            $getUserData = "SELECT * FROM `user` WHERE `id-User`=$user_id";
            $resultas=$this->cnx->query($getUserData);

            if($resultas->num_rows >0)
                {
                    $dataOfUser=$resultas->fetch_assoc();

                    return $dataOfUser;
                }
            else{

                redirect('Not Found User!!!','signin.php','danger');
            }

        }
        else
        {
            return false;
        }
    }



}
$authentificated = new AuthentificationController;

?>