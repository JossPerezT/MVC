<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Dirección</th>
      <th scope="col">RFC</th>
      <th scope="col">Fecha de <br>Registro</th>
      <!-- <th scope="col">Fecha de <br>Actualización</th>
      <th scope="col">Fecha de <br>Eliminación</th> -->
      <th scope="col">Status</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
   <?php  if (isset($mostrarClientes["errorClientes"])) { ?>
    
<tr>
    <td colspan="11"><?=$mostrarClientes["errorClientes"]?></td>
</tr>

    <?php }else { 
        //$i alias
        //=> reasignación de la variable
        foreach ($mostrarClientes["id_cliente"] as $i =>$cliente) {  ?>
      <tr>
      <td><?=$i+1 ?></td>
       <td class="nombre-<?=$cliente?>"><?=$mostrarClientes["nombre"][$i]?></td>
       <td class="email-<?=$cliente?>"><?=$mostrarClientes["email"][$i]?></td>
       <td class="telefono-<?=$cliente?>"><?=$mostrarClientes["telefono"][$i]?></td>
       <td class="direccion-<?=$cliente?>"><?=$mostrarClientes["direccion"][$i]?></td>
       <td class="rfc-<?=$cliente?>"><?=$mostrarClientes["rfc"][$i]?></td>
       <td><?=$mostrarClientes["fecha_registro"][$i]?></td>
       <!-- <td><?=$mostrarClientes["fecha_actualizacion"][$i]?></td> 
       <td><?=$mostrarClientes["fecha_eliminacion"][$i]?></td> -->
       <td class="<?=$mostrarClientes["statusColor"][$i]?> status<?=$cliente?>"><?=$mostrarClientes["statusMensaje"][$i]?></td>
    <td>
    <i class="bi bi-pencil-square editar editar-<?=$cliente?>"  data-idcliente="<?=$cliente?>" ></i>  
    <i class="bi bi-x-circle cancelar cancelar-<?=$cliente?>" data-idcliente="<?=$cliente?>" style="display: none;" ></i>
    <i class="bi bi-bag-check-fill guardar guardar-<?=$cliente?> " data-idcliente="<?=$cliente?>" style="display: none;"></i>  
    <i class="bi bi-trash3 eliminar eliminar-<?=$cliente?>" data-idcliente="<?=$cliente?>"></i>
   
</td>
</tr>
       


        <?php }
    } ?>

  </tbody>
</table>