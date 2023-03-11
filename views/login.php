
  <form action="ingresar" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo: </label>
    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña: </label>
    <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

    <?php 
     if(isset($resp['error_usuario'])){
      ?>
      <div class="alert alert-danger" role="alert">
      <?=$resp['error_usuario'];?>
    </div>
     <?php }       
    ?> 
   
