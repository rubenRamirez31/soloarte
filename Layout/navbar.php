<nav class="navbar  navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Solo Arte</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- MENU START  -->
<nav class="">
  <!-- NAV CONTAINER START -->
  <div class="container-fluid">

    <!-- NAV BUTTON  -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- OFFCANVAS MAIN CONTAINER START -->
    <section class="offcanvas offcanvas-start bg-dark" id="menuLateral" tabindex="-1">
      <div class="offcanvas-header" data-bs-theme="dark">
        <h5 class="offcanvas-title text-info">Administrador</h5>
        <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
      </div>
      <!-- OFF CANVAS MENU LINKS  START-->
      <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
        <ul class="navbar-nav fs-5 justify-content-evenly">
          <li class="nav-item p-3 py-md-1">
            <a href="index.php" class="nav-link text-white"><i class="fa-solid fa-warehouse"></i> Productos</a>
          </li>
          <li class="nav-item p-3 py-md-1">
            <a href="Usuarios.php" class="nav-link text-white"><i class="fa-solid fa-user"></i> Usuarios</a>
          </li>
          <li class="nav-item p-3 py-md-1">
            <a href="Envios.php" class="nav-link text-white"><i class="fa-solid fa-truck"></i> Envios</a>
          </li>
          <li class="nav-item p-3 py-md-1">
            <a href="Solicitudes.php" class="nav-link text-white"><i class="fa-solid fa-inbox"></i> Solicitudes</a>
          </li>
        </ul>
        <!-- enlaces redes sociales -->

        <div class="d-lg-none align-self-center py-3">
          <a href=""><i class="bi bi-twitter px-2 text-info fs-2"></i></a>
          <a href=""><i class="bi bi-facebook px-2 text-info fs-2"></i></a>
          <a href=""><i class="bi bi-github px-2 text-info fs-2"></i></a>
          <a href=""><i class="bi bi-whatsapp px-2 text-info fs-2"></i></a>
        </div>
      </div>
    </section>
    <!-- OFFCANVAS MAIN CONTAINER END  -->
  </div>
</nav>