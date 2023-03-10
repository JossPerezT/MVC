<?php 

  class clientesController{
      
      public function __construct(){
        require_once("models/clientesModel.php");
        $this->clientesModel=new clientesModel();
          $this->urlJS = "../assets/js/clientes.js";
      }

      public function registrar(){
        
        require_once "views/templates/header.php";
        require_once "views/templates/menu.php";
        require_once "views/clientes.php";
        require_once "views/templates/footer.php";
      }

      public function save(){
        $this->clientesModel->saveClient($_POST);
      }

  }

?>