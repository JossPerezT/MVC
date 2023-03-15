<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header card bg-primary text-white mb-4">
          <h3 class="text-center font-weight-light my-4">Ingresar</h3>
        </div>
        <div class="card-body">
          <?php
          if (isset($resp['error_usuario'])) {
            ?>
            <div class="alert alert-danger" role="alert">
              <?= $resp['error_usuario']; ?>
            </div>
          <?php }
          ?>
          <form action="ingresar" method="post">
            <div class="form-floating mb-3">
              <input type="email" name="usuario" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Email">
              <label for="exampleInputEmail1" >Email: </label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1"
                placeholder="Contraseña">
              <label for="exampleInputPassword1">Contraseña: </label>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>