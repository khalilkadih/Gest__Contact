<?php

// include_once('db/db.php');
class loginController{

    public function __construct()
    {
        
        $db=new db_conexion();
        $this->cnx=$db;
    }
    public function userLogin()
    {
        $checkLogin="SELECT * FROM user WHERE email='khalil@gmail.com' AND Password='khalil'";
        $res=$this->cnx->Query($checkLogin);
        var_dump($res);
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
}


?>
