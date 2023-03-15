<section class="vh-10" style="background-color: #F3F9F5;">
    <div class="container py-5 h-10">
        <div class="row d-flex justify-content-center align-items-center h-10">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">

                            <img src="https://webstockreview.net/images/user-icon-png-4.png"
                                class="img-thumbnail aling-items-center" alt="50px">
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center" style="AEBCB2">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="ingresar" method="post">
                                    <h5 class=" fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicio de sesión
                                    </h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="usuario" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        <label class="form-label" for="form2Example17">Correo: </label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="contrasena" class="form-control"
                                            id="exampleInputPassword1">
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-outline-success ">Ingresar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (isset($resp['error_usuario'])) {
?>
<div class="alert alert-danger" role="alert">
    <?= $resp['error_usuario']; ?>
</div>
<?php }
?>