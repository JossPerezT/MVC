<div class="modal fade" id="mensajeSistemas" tabindex="-1" aria-labelledby="mensajeSistemasLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="mensajeSistemasHeader" class="modal-header">
        <h1 class="modal-title fs-5" id="mensajeSistemasLabel">Notificación de Sistema</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="infoSistema" class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php

if (isset($this->urlJS)) {

  ?>
  <script src="<?= $this->urlJS ?>"></script>
<?php } ?>
</body>
<footer class="py-4 bg-light mt-auto">
  <div class="container-fluid px-4">
    <div class="d-flex align-items-center justify-content-between small">
      <div class="text-muted">Copyright &copy; MVC por mentoría de Sergio Ortiz 2023</div>
      <div>
        <a href="#">Política de privacidad</a>
        &middot;
        <a href="#">Terminos &amp; Condiciones</a>
      </div>
    </div>
  </div>
</footer>
</html>