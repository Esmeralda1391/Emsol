<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Propiedad
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('/propiedad/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/propiedad/mostrar'); ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/propiedad/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        <!--  -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Reporte
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('/reporte/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/reporte/mostrar'); ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/reporte/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Venta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('/venta/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/venta/mostrar'); ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/venta/buscar'); ?>">Buscar</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>