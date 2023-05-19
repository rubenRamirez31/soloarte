<?php

session_start();

if (isset($_SESSION['nombre'])) {
    header('Location:/soloarte/Paginas/Usuario/Productos.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../Layout/estilos.php'  ?>
    <title>Inicia Sesión</title>
</head>

<body>

    <?php

    $resultado = $_GET['resul'] ?? null;

    if ($resultado ===  "1") : ?>
        <!-- Codigo para activar sweet alert -->
        <script>
            Swal.fire(
                'Usuario Creado Correctamente',
                '',
                'success'
            );
        </script>

    <?php endif ?>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <img src="" alt="">

                                    <div class="text-center">
                                        <img src="../Images/logo.jpg" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">SoloArte</h4>
                                    </div>

                                    <form action="../Transacciones/validarLogin.php" method="POST">
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form2Example11" class="form-control" />
                                            <label class="form-label" for="form2Example11">Correo Electronico</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22" class="form-control" />
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                            <a href="crearUsuario.php" class="btn btn-outline-dark">Crear Una</a>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn bg-NaranjaSA">Iniciar Sesión</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">

                                <div class=" p-2">
                                    <img src="../Images/login1.jpg" alt="" srcset="" class=" img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                        <img src="https://us.123rf.com/450wm/yupiramos/yupiramos1809/yupiramos180927363/109687161-dise%C3%B1o-de-ilustraci%C3%B3n-de-vector-de-icono-de-pir%C3%A1mide-de-cultura-maya.jpg?ver=6" height="70" alt="" loading="lazy" />
                    </div>

                    <p class="text-center">Chéen yila'ob(Solo arte)</p>

                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                        <li>
                            <a class="text-white px-2" href="#!">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white px-2" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white ps-2" href="#!">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Conoce nuestros servicios</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Venta de artesanias</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Compra de artesanias</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Promociones</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Asociate con nosostros</a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Acerca de nosostros</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Tienda</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Asociación</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Terminos y condiciones</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Blog</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Trabajo remoto</a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Contacto</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-map-marker-alt pe-2"></i>Calle Las Abejas #32</p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone pe-2"></i>+52 231 458 98 63</p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope pe-2 mb-0"></i>soloarte@store.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <?php include '../Layout/scripts.php' ?>
</body>

</html>