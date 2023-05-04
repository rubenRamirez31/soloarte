<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../Layout/estilos.php'  ?>
    <title>Inicia Sesion</title>
</head>

<body>

    <?php if (isset($_GET["resul"]) ===  "1") : ?>
        <!-- Codigo para activar sweet alert -->
        <script>
            Swal.fire(
                'Usuario Creado Correctamente',
                'Ahora puede acceder.',
                'success'
            );
        </script>

    <?php endif ?>

    <section class="ImagenFondoLogin" style="height: 100%; ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="cardSALogin rounded-3 text-white">
                        <div class="row g-1 bg-VioletaErica">
                            <div class="col-lg-6 ">
                                <div class="card-body p-md-5 mx-md-4">
                                    <!-- -->
                                    <div class="text-center">
                                        <!--<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo"> -->

                                        <h1>Logo*</h1>

                                        <h4 class="mt-1 mb-5 pb-1">SoloArte</h4>
                                    </div>

                                    <form action="../Transacciones/validarLogin.php" method="POST">
                                        <p>Inicia sesión con tu cuenta</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Usuario o Direcion de Correo electronico" required />
                                            <label class="form-label" for="email">Correo Electrónico</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password" class="form-control" required />
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">

                                            <button type="submit" class="btn bg-NaranjaSA">Iniciar Sesión</button>
                                            <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                            <a href="crearUsuario.php" class="btn btn-outline-danger">Crea una</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4 text-dark">SoloArte</h4>
                                    <p class="small mb-0 text-dark">Imagen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Remove the container if you want to extend the Footer to full width. -->
    
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white bg-brownSA">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                            <p>
                                <a class="text-white">MDBootstrap</a>
                            </p>
                            <p>
                                <a class="text-white">MDWordPress</a>
                            </p>
                            <p>
                                <a class="text-white">BrandFlow</a>
                            </p>
                            <p>
                                <a class="text-white">Bootstrap Angular</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Useful links
                            </h6>
                            <p>
                                <a class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a class="text-white">Help</a>
                            </p>
                        </div>

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-3">

                <!-- Section: Copyright -->
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <!-- Copyright -->
                            <div class="p-3">
                                © 2020 Copyright:
                                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                            </div>
                            <!-- Copyright -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
                        </div>
                        <!-- Grid column -->
                    </div>
                </section>
                <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->

    <?php include '../Layout/scripts.php' ?>
</body>

</html>