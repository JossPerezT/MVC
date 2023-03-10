<?php
    class clientesModel{
        public function __construct(){
            require_once("db/Conect.php");
            $con=new Conect();
            $this->con=$con->conexion();
            $fecha=getdate();
            $this->fecha=$fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
        }
        public function saveClient($datos){
            $query="INSERT INTO clientes(nombre,email,telefono,direccion,rfc,fecha_registro) VALUES ('".$datos['nombre']."','".$datos['email']."','".$datos['telefono']."','".$datos['direccion']."','".$datos['rfc']."','".$this->fecha."')";
            mysqli_query($this->con,$query);
            return true;
        }
    }
?>