<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Plugins/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="Plugins/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="Plugins/bootstrap/css/all.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Solo Arte</title>
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
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


 
<!-- Carrusel de imágenes -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../soloarte/Images/CB1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../soloarte/Images/CB2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../soloarte/Images/CB3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- Contenido principal -->
  <div class="container mt-5">
    <h1>Bienvenido a Solo Arte</h1>

    <p>¡Encuentra los mejores productos al mejor precio en nuestra tienda en línea! Explora nuestra amplia selección de categorías y descubre increíbles ofertas que no podrás resistir.</p>
    <a href="#" class="btn btn-primary">Explorar</a>
  </div>

   <!-- Enlaces a los archivos JavaScript de Bootstrap -->
   <script src="Plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
