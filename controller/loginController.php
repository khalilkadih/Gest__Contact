<?php

// include_once('db/app.php');
class loginController{

    public function __construct()
    {
        
        $db=new db_conexion();
        $this->cnx=$db->cnx;
    }
    public function userLogin($email,$password)
    {
        $checkLogin="SELECT * FROM user WHERE email='$email' AND Password='$password'";
        $res=$this->cnx->Query($checkLogin);

        if($res->num_rows > 0){

            $data=$res->fetch_assoc();
            $this->userAuthentification($data);
            return true;
        }
        else {
            return false;
        }

    }
    private function userAuthentification($data)
    {

        $_SESSION['authenticated']=true;
        // $_SESSION['Auto_role']=$data['role-as'];
        $_SESSION['auth_user']=
        [
            'user_id'=>$data['id-User'],
            'user_fname'=>$data['firstName'],
            'user_lname'=>$data['lasttName'],
            'user_email'=>$data['email']
        ];
    }



    public function islogged()
    {
        if($_SESSION['authenticated']=== TRUE)
        {
            redirect('You are already in login ','index.php');

        }
        else 
        {

            return false;
        }


    }
}


?>
