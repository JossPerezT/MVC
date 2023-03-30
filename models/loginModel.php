<?php
class loginModel
{
    public function __construct()
    {
        require_once('db/Conect.php'); //Se llama el archivo Conect.php
        $con = new Conect(); // Se crea una instancia de la clase Conect 
        $this->con = $con->conexion();// Creamos pseudovariable "con", que contiene el metodo conexion();
    }
    public function validar($datos)//Se ingresa el parametro de "nombre datos"
    {
        $query = 'SELECT * FROM usuarios WHERE email = "' . $datos['usuario'] .'" 
        AND password = "' . $datos['contrasena'] . '" AND status = 1';

        $respuesta = mysqli_query($this->con, $query);//Se realiza una consulta en la BD 

        if (mysqli_num_rows($respuesta) > 0) {// Obtenemos el número de filas en el conjunto de resultados y comparamos con 0
            while ($row = mysqli_fetch_assoc($respuesta)) {//Obtenemos la fila deresultados  como una matriz asociativa 
                $data['id_usuario'] = $row['id_usuario'];
                $data['nombre_usuario'] = $row['nombre'];
            }
        } else {
            $data['error_usuario'] = "El usuario no existe";
        }
        return $data;
    }
}
