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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<?php if (isset($this->urlJS)):?>
  <script src="<?= $this->urlJS ?>"></script>
<?php endif ?>

<footer class="footer mt-auto py-3 ">
        
            <div class="row">
                <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>

                <a class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none" width="40" height="32">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                        <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z" />
                        <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z" />
                    </svg>
                    <!-- <i class="bi bi-bootstrap" width="40" height="32" fill="currentColor" viewBox="0 0 16 16"></i> -->
                </a>

                <div class="col-md-4 text-end justify-content-end">
                    softteck
                </div>
            </div>
        
    </footer>
</body>

</html>