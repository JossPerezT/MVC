<?php
class loginModel
{
    public function __construct()
    {

        require_once('db/Conect.php');
        $con = new Conect();
        $this->con = $con->conexion();
    }
    public function validar($datos)
    {
        $query = 'SELECT * , IF (U.id_usuario = D.id_lider, 1, 0) AS es_lider FROM usuarios U INNER JOIN departamento D on U.id_departamento = D.id_departamento WHERE email = "' . $datos['usuario'] . '" AND password = "' . $datos['contrasena'] . '" AND status = 1';
        
        $respuesta = mysqli_query($this->con, $query);
        
        if (mysqli_num_rows($respuesta) > 0) {
            while ($row = mysqli_fetch_assoc($respuesta)) {
                $data['id_usuario'] = $row['id_usuario'];
                $data['nombre_usuario'] = $row['nombre'];
                $data['id_departamento'] = $row['id_departamento'];
                $data['es_lider'] = $row['es_lider'];
            }
        } else {
            $data['error_usuario'] = "El usuario no existe";
        }
        return $data;
    }
}
