<?php
    class loginModel{
        public function __construct(){

            require_once('db/Conect.php');
            $con = new Conect();
            $this->con = $con->conexion();
        } 
            public function validar($datos){
             $query='SELECT * FROM usuarios WHERE email = "'.$datos['usuario'].'" AND password = "'.$datos['contrasena'].'" AND status = 1';
             
             $respuesta = mysqli_query($this->con, $query);

             if (mysqli_num_rows($respuesta) > 0){
                 while($row=mysqli_fetch_assoc($respuesta)){
                   $data['id_usuario'] = $row['id_usuario'];
                   $data['nombre_usuario'] = $row['nombre'];
                 } 


             }else{
                $data['error_usuario']="El usuario no existe"; 
             }
             return $data;
            
            }
            
        }
?>
