<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: NoAutenticado.php");
}

if ($_SESSION['rol'] != 1) {

    header("Location: NoAutorizado.php");
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
    <title>Solicitudes</title>
</head>

<body>
    <?php include '../../Layout/navbar.php' ?>


    <?php
    include '../../Conection/cn.php';


    $query2 = "SELECT * FROM solicitudes WHERE id_usuario = " . $_GET['id'];
    $res = $db->query($query2);
    $datos1 = $res->fetch_assoc();
    ?>


    <div class="d-flex justify-content-center">
        <?php
        $query = "SELECT email,nombre,apepat,apemat FROM usuarios WHERE id_usuario = " . $_GET['id'];
        $res = $db->query($query);
        $datos = $res->fetch_assoc();
        ?>
        <div class="col-lg-7 col-sm-12 mt-5">
            <h1 class="text text-center">Solicitud</h1>
            <h3 class="text text" style="font-weight: bold;"> Correo de usuario:</h3>
            <h3 style="font-weight: none;"><?php echo $datos['email'] ?></h3>

            <h3 class="text text" style="font-weight: bold;"> Nombre Completo:</h3>
            <h3><?php echo $datos['nombre'] . " " . $datos['apepat'] . " " . $datos['apemat'] ?></h3>

            <h3 class="text text" style="font-weight: bold;"> Fecha de creacion:</h3>
            <h3><?php echo $datos1['fecha'] ?></h3>

            <h2 class="text text-center">Respuestas</h2>

            <div class="mb-3">
                <h4 style="font-weight: bold;">1. ¿Cuál es tu experiencia previa en la industria de distribución de artesanías o productos similares?</h4>
                <h5><?php echo $datos1['P1'] ?></h5>
            </div>

            <div class="mb-3">
                <h4 style="font-weight: bold;">2.¿Cuál es tu conocimiento sobre las distintas técnicas artesanales utilizadas en México?</h4>
                <h5><?php echo $datos1['P2'] ?></h5>
            </div>

            <div class="mb-3">
                <h4 style="font-weight: bold;">3. ¿Cuál es tu enfoque para garantizar que los productos sean auténticos y representen fielmente la cultura mexicana?</h4>
                <h5><?php echo $datos1['P3'] ?></h5>
            </div>

            <div class="mb-3">
                <h4 style="font-weight: bold;">4. ¿Cómo te mantendrías actualizado/a sobre las últimas tendencias y demandas en el mercado de las artesanías mexicanas?</h4>
                <h5><?php echo $datos1['P4'] ?></h5>
            </div>

            <div class="mb-3">
                <h4 style="font-weight: bold;">5. ¿Qué valor añadido crees que podrías aportar a la empresa en términos de asegurar la calidad de las artesanías y mejorar la experiencia del cliente?</h4>
                <h4><?php echo $datos1['P5'] ?></h4>
            </div>

            <div class="mb-3">
                <?php

                $datos = array();
                $id = $_GET['id'];
                $sql = "SELECT imagenS FROM imgSolocitudes WHERE id_usuario=" . $_GET['id'];
                $resul = $db->query($sql);

                while ($row = $resul->fetch_assoc()) {
                    $datos[] = $row['imagenS'];
                }
                ?>

                <h4 style="font-weight: bold;">Imagenes</h4>

                <?php

                for ($i = 0; $i < 3; $i++) {

                    echo '<img style="width: 400px;" class=" img-fluid mx-2 mt-2" src="data:image/jpeg;base64,' . base64_encode($datos[$i]) . '" alt="Imagen del producto del usuario">';
                }

                ?>

            </div>

            <div class="d-flex justify-content-end">
                <div class="mb-3">
                    <?php if ($datos1['estado'] == 'Enviada') : ?>
                        <form action="../../Transacciones/actestatussoli.php" method="POST">
                            <input type="hidden" name="id_usuario" value="<?php echo $_GET['id'] ?>">
                            <button type="submit" class="btn btn-outline-success">Marcar como leída</button>
                        </form>
                    <?php endif ?>

                    <?php if ($datos1['estado'] == 'Revision') : ?>
                        <div class=" d-flex justify-content-between">
                            <form action="../../Transacciones/aceptarechazar.php">
                                <label style="font-weight: bold;" class="" for="select">Seleccione una opcion</label>
                                <select name="estado" id="select" class=" form-select">
                                    <option value="" selected disabled>Seleccionar</option>
                                    <option value="Aceptada">Aceptar</option>
                                    <option value="Rechazada">Rechazar</option>
                                </select>
                                <button type="submit" class="btn btn-outline-success">Enviar</button>
                            </form>
                        </div>
                    <?php endif ?>

                </div>
            </div>
        </div>





    </div>
    <script src="../../Jquery/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="../../DataTable/datatables.min.js"></script>
    <?php include '../../Layout/scripts.php' ?>
</body>

</html>