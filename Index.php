<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="Plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="Plugins/bootstrap/css/all.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Bienvenido a SoloArte</title>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Solo Arte</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Paginas/Usuario/Productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cradores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promociones</a>
          </li>
        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>

  <!-- Carrusel de imágenes -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="Images/CB1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/CB2.jpg"" class=" d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/CB3.jpg"" class=" d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>

  <!-- Contenido principal -->
  <div class="container mt-5">
    <h1>Bienvenido a SoloArte</h1>

    <?php
    session_start();

    if (!$_SESSION) : ?>

      <div class="d-flex">
        <p class="mt-2">¿No tienes cuenta?</p>
        <a href="Paginas/crearUsuario.php" class="btn btn-outline-dark mx-1">Registrate</a>
      </div>
      <div class="d-flex mt-2">
        <p class="mt-2">¿Ya cuentas con una?</p>
        <a href="Paginas/login.php" class="btn btn-outline-dark mx-1"> Inicia Sesión</a>
      </div>
    <?php endif ?>

    <?php if (isset($_SESSION)) : ?>


    <?php endif ?>
    <p>¡Encuentra los mejores productos al mejor precio en nuestra tienda en línea! Explora nuestra amplia selección de categorías y descubre increíbles ofertas que no podrás resistir.</p>
    <a href="Paginas/Usuario/Productos.php" class="btn btn-primary">Explorar</a>
  </div>

  <!-- Enlaces a los archivos JavaScript de Bootstrap -->
  <script src="Plugins/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>