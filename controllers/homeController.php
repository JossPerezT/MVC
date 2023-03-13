<?php 
class homeController {
    public function __construct(){
session_start();
    }
public function dashboard(){
   require_once "views/templates/header.php";
   require_once "views/templates/menu.php";
   require_once "views/dashboard.php";
   require_once "views/templates/footer.php";
}
}
