<?php 
class homeController {
    public function __construct(){
session_start();
    }
public function dashboard(){
    echo "Hola";
    var_dump($_SESSION);
}
}
?>
