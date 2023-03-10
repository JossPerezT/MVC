<?php
class clientesModel
{
    public function __construct()
    {
        require_once("db/Conect.php");
        $con = new Conect();
        $this->con = $con->conexion();
        $fecha = getdate();
        $this->fecha = $fecha['year'] . "-" . $fecha['mon'] . "-" . $fecha['mday'];
    }
    public function saveClient($datos)
    {
        $query = "INSERT INTO clientes(nombre,email,telefono,direccion,rfc,fecha_registro) VALUES ('" . $datos['nombre'] . "','" . $datos['email'] . "','" . $datos['telefono'] . "','" . $datos['direccion'] . "','" . $datos['rfc'] . "','" . $this->fecha . "')";
        mysqli_query($this->con, $query);
        return "Cliente registrado";
    }
    public function getClients()
    {
        $query = "SELECT *, if(status=1, 'ACTIVO', 'INACTIVO') AS statusMensaje, if(status=1,'bg-success', 'bg-warning') AS statusColor FROM clientes";
        $resp = mysqli_query($this->con, $query);
        if (mysqli_num_rows($resp) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($resp)) {
                $data["id_cliente"][$i] = $row["id_cliente"];
                $data["nombre"][$i] = $row["nombre"];
                $data["email"][$i] = $row["email"];
                $data["telefono"][$i] = $row["telefono"];
                $data["direccion"][$i] = $row["direccion"];
                $data["rfc"][$i] = $row["rfc"];
                $data["fecha_registro"][$i] = $row["fecha_registro"];
                $data["fecha_actualizacion"][$i] = $row["fecha_actualizacion"];
                $data["fecha_eliminacion"][$i] = $row["fecha_eliminacion"];
                $data["statusMensaje"][$i] = $row["statusMensaje"];
                $data["statusColor"][$i] = $row["statusColor"];

                $i++;
            }
        } else {
            $data["errorClientes"] = "no hay registros";
        }

        return $data;
    }

    public function updateClient($datos)
    {
        $query = "UPDATE clientes SET nombre='" . $datos['nombre'] . "',email='" . $datos['email'] . "',telefono='" . $datos['telefono'] . "',direccion='" . $datos['direccion'] . "',rfc='" . $datos['rfc'] . "',fecha_actualizacion='" . $this->fecha . "',status='" . $datos['status'] . "' WHERE id_cliente='" . $datos['idCliente'] . "'";
        mysqli_query($this->con, $query);
        return "Cliente actualizado";
    }

    public function deleteClient($idCliente){
        $query = "UPDATE clientes SET status = 0 WHERE id_cliente = " . $idCliente;
        mysqli_query($this->con, $query);
        return "Cliente eliminado";
    }
}