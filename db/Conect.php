<?php
//MVC:Cada archvivo esta constituido por clase principal, metodo constructor y metodos o funciones hij@s
class Conect
{
    public function __construct(){
    }
    public function conexion() //public porque se accede desde cualquier lado
    {
        $con = mysqli_connect("localhost", "root", "", "MVC");
        if (!$con) {
            echo "conexion fallida";
        } else {
            return $con;
        }
    }
}
