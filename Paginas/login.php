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
    <?php include '../Layout/navbar.php' ?>


    <?php if ($_GET["resul"] === "1") : ?>
        <!-- Codigo para activar sweet alert -->
        <script>
            Swal.fire(
                'Usuario Creado Correctamente',
                '',
                'success'
            );
        </script>

    <?php endif ?>
    

    <?php include '../Layout/scripts.php' ?>
</body>

</html>