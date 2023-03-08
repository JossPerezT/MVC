<?php
class loginController
{
    public function __construct(){
        require_once "models/loginModel.php";
        $this->loginModel=new loginModel();
    }
    public function ingresar(){
        if(isset($_POST["usuario"])&& isset($_POST["contrasena"])){
            $this->loginModel->validar($_POST);

        }
        require_once "views/templates/header.php";
        require_once "views/login.php";
        require_once "views/templates/footer.php";
    }

}

?>