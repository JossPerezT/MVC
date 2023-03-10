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
            return "Cliente registrado";
        }
        public function getClients(){
            $query="SELECT * FROM clientes";
            $resp= mysqli_query($this->con,$query);
            if (mysqli_num_rows($resp)>0) {
                $i=0;
                while ($row=mysqli_fetch_assoc($resp)) {
                    $data["id_cliente"][$i]=$row["id_cliente"];
                    $data["nombre"][$i]=$row["nombre"];
                    $data["email"][$i]=$row["email"];
                    $data["telefono"][$i]=$row["telefono"];
                    $data["direccion"][$i]=$row["direccion"];
                    $data["rfc"][$i]=$row["rfc"];
                    $data["fecha_registro"][$i]=$row["fecha_registro"];
                    $data["fecha_actualizacion"][$i]=$row["fecha_actualizacion"];
                    $data["fecha_eliminacion"][$i]=$row["fecha_eliminacion"];
                    $data["status"][$i]=$row["status"];
                
                $i++;
                }
            }else {
                $data["errorClientes"]= "no hay registros";
            }

            return $data;

        }
    }
?>