<div class="container text-center">
  <div class="row">
    <div class="col">

    </div>
    <div class="col m-5 p-5 shadow-lg p-3 mb-5 bg-body-tertiary border rounded">
      <h1>Sistema ABC</h1>
      <form action="ingresar" method="post" class=" p-3">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo: </label>
          <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña: </label>
          <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-outline-primary">Ingresar</button>
      </form>

      <?php
      if (isset($resp['error_usuario'])) {
      ?>
        <div class="alert alert-danger" role="alert">
          <?= $resp['error_usuario']; ?>
        </div>
      <?php }
      ?>
    </div>
    <div class="col">

    </div>
  </div>
</div>