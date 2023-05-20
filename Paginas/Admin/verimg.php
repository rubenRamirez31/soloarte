<?php
include '../../Conection/cn.php';

$datos = array();
$id = $_GET['id'];
$sql = "SELECT imagen FROM imagenes WHERE id_producto= $id";
$resul = $db->query($sql);

while ($row = $resul->fetch_assoc()) {
    $datos[] = $row['imagen'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../DataTable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../DataTable/DataTables-1.13.4/css/dataTables.bootstrap5.min.css">
    <?php include '../../Layout/estilos.php'  ?>
    <title>SoloArte</title>
</head>

<body>
    <?php include '../../Layout/navbar.php' ?>

    <div class="container-fluid">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($datos[0]) . '" alt="Imagen del producto">' ; ?>
                </div>

                <div class="carousel-item ">
                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($datos[1]) . '" alt="Imagen del producto">'  ; ?>
                </div>

                <div class="carousel-item ">
                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($datos[2]) . '" alt="Imagen del producto">' ;?> 
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </div>


    <script src="../../Jquery/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="../../DataTable/datatables.min.js"></script>
    <?php include '../../Layout/scripts.php' ?>
</body>

</html>