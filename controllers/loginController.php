<?php
class loginController
{
    public function __construct()
    {
        require_once "models/loginModel.php";
        $this->loginModel = new loginModel();
    }
    public function ingresar()
    {
        if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
            $resp = $this->loginModel->validar($_POST);
            if (isset($resp["id_usuario"])) {
                session_start();
                $_SESSION = $resp;
                header("Location:../home/dashboard");// entra al controlador home y despues al metodo dashboard
            }
        }
        require_once "views/templates/header.php";
        require_once "views/login.php";
        require_once "views/templates/footer.php";
    }
}
