
<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header("Location: NoAutenticado.php");


    }

    if ($_SESSION['rol'] != 1) {

        header("Location: NoAutorizado.php");

    }
       
 ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../DataTable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../DataTable/DataTables-1.13.4/css/dataTables.bootstrap5.min.css">
    <?php include '../../Layout/estilos.php'  ?>
    <title>Ventas</title>
</head>

<body>
    <?php include '../../Layout/navbar.php' ?>
    <div class="container py-3">
        <h1 class="text text-center">Ventas</h1>
    </div>

    <script type="text/javascript" src="../../DataTable/datatables.min.js"></script>
    <?php include '../../Layout/scripts.php' ?>
</body>

</html>