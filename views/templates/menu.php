<?php var_dump($_SESSION);?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../clientes/registrar">Registrar</a></li>
            <li><a class="dropdown-item" href="../clientes/listar">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Compras
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../clientes/registrar">Crear Solicitud</a></li>
            <li><a class="dropdown-item" href="../clientes/listar">Ver Solicitudes</a></li>
            <li><a class="dropdown-item" href="../clientes/listar">Mis Solicitudes</a></li>
            <?php if($_SESSION['es_lider'] == 1){ ?> 
            <li><a class="dropdown-item" href="../clientes/listar">Por Autorizar</a></li>
            <?php } ?>
            <?php if($_SESSION['id_departamento'] == 2){ ?> 
            <li><a class="dropdown-item" href="../clientes/listar">Crear Orden de Compra</a></li>
            <li><a class="dropdown-item" href="../clientes/listar">Ver Orden de Compra</a></li>
            <li><a class="dropdown-item" href="../clientes/listar">Mis Ordenes de Compra</a></li>
            <?php } ?>
            <?php if($_SESSION['es_lider'] == 1 && $_SESSION['id_departamento'] == 2){ ?>
            <li><a class="dropdown-item" href="../clientes/listar">Por Autorizar Orden de Compra</a></li>
            <?php } ?>
            <?php if($_SESSION['es_lider'] == 1 && $_SESSION['id_departamento'] == 3){ ?>
            <li><a class="dropdown-item" href="../clientes/listar">Por Autorizar Orden de Compra</a></li> <!-- para el departamento de finanzas-->
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>