<?php
class Conect
{
    public function conexion()
    {
        $con = mysqli_connect("localhost", "root", "", "MVC");
        if (!$con) {
            echo "conexion fallida";
        } else {
            return $con;
        }
    }
}
