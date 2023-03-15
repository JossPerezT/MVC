<br>
<br>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form action="ingresar" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center ">
          <p class="lead fw-normal mb-0 me-3">¡Hola de nuevo!</p>
          </div>

          <div class="divider d-flex align-items-center my-4 justify-content-center">
            <p class="lead mb-0 me-3">Inicia sesión con tu correo electrónico</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <div class="mb-3">

    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico*"/>
    </div>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-3">
          <div class="mb-3">
   
    <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" placeholder="Contraseña*"/>
  </div>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3">
              <label class="form-check-label" for="form2Example3">
                Recordarme
              </label>
            </div>
            <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" 
              style="padding-left: 8.8rem; padding-right: 8.8rem;">Iniciar sesión
            </button>
            <!--<p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
              <a href="#!" class="link-danger">Register</a></p>-->
          </div>
        </form>
      </div>
    </div>
  </div>
  
<?php
if (isset($resp['error_usuario'])) {
?>
  <div class="alert alert-danger" role="alert">
    <?= $resp['error_usuario']; ?>
  </div>
<?php 
}
?>
</section>



