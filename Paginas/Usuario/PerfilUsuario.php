<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>MiPerfil</title>
</head>

<body>
    <?php include '../../Layout/navbarU.php' ?>

    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-lg-2 col-sm-12 d-flex">
                <div class="container-sm d-flex justify-content-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="Generic placeholder image" class="img-fluid img-thumbnail" style="max-width: 150px; z-index: 1; max-height: 150px;">
                </div>
            </div>

            <div class="col-lg-8 col-sm-12 mb-5">
                <h1 class="text text-center">Mi Perfil</h1>

                <div class="row justify-content-between mt-lg-5">
                    <div class="col-6">
                        <h5 class="text text-center">Datos Generales</h5>

                    </div>

                    <div class="col-6">
                        <h5 class="text text-center">Productos</h5>
                    </div>
                </div>

                <div class=" container-sm border border-dark">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Personales:
                        <p></p>

                        </li>
                        <li class="list-group-item">Direcciones:</li>
                        <li class="list-group-item">Pagos:</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-12 d-flex justify-content-center ">
                <div class="container d-flex justify-content-center" style="max-height: 40px;">
                    <button class="btn btn-primary">Asociarme</button>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../Layout/scripts.php' ?>
</body>

</html>