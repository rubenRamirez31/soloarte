<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <?php include("../../Layout/estilos.php") ?>
</head>

<body background="https://img.freepik.com/fotos-premium/textura-fondo-signos-interrogacion-impresos_124595-213.jpg">
    <?php include("../../Layout/navbar.php") ?>

    <div class="container text-center mt-4" style="width: auto margin: auto ">
        <div class=" card col-md-6 offset-md-3" style="width: col-md-6;">
            <img src="https://cdn-icons-png.flaticon.com/512/5741/5741333.png" class="card-img-top "
                style="width: col-md-6;" alt="...">
            <div class="card-body" style="col-md-6">
                <h5 class="card-title text-danger">Atención!!!!</h5>
                <h3 class="card-text">Parece que no tienes autorización para ingresar a esta pagina</h3>

                <a href="../../Index.php" class="btn btn-lg btn-outline-primary">Regresar a principal</a>
            </div>
        </div>
    </div>
    <?php include("../../Layout/scripts.php");
    ?>
    
</body>

</html>