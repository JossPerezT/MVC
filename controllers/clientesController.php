<?php

class clientesController
{

  public function __construct()
  {
    require_once("models/clientesModel.php");
    $this->clientesModel = new clientesModel();
    $this->urlJS = "../assets/js/clientes.js";
    session_start();
  }

  public function registrar()
  {

    require_once "views/templates/header.php";
    require_once "views/templates/menu.php";
    require_once "views/clientes.php";
    require_once "views/templates/footer.php";
  }

  public function save()
  {
    $respuesta = $this->clientesModel->saveClient($_POST);
    echo json_encode($respuesta);
  }

  public function listar()
  {
    $mostrarClientes = $this->clientesModel->getClients();
    require_once "views/templates/header.php";
    require_once "views/templates/menu.php";
    require_once "views/listar.php";
    require_once "views/templates/footer.php";
  }

  public function actualizar(){
    $respuesta = $this->clientesModel->updateClient($_POST);
    echo json_encode($respuesta);
  }

  public function eliminar(){
    $respuesta = $this->clientesModel->deleteClient($_POST['idCliente']);
    echo json_encode($respuesta);
  }
}
