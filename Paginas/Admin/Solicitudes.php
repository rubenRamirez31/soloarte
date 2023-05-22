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

    $resultado = $_GET['resul'] ?? null;

    if ($resultado === "1") : ?>
        <script>
            Swal.fire(
                'Marcada como leida',
                '',
                'success'
            );
        </script>

    <?php endif ?>





    <div class="container mt-3">
        <h1 class="text text-center">Solicitudes</h1>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class=" col-lg-4 col-sm-12 mt-2">
                    <h3 class="text text-center">Nuevas</h3>
                    <?php
                    include '../../Conection/cn.php';

                    $query2 = "SELECT id_usuario,fecha FROM solicitudes WHERE estado = 'Enviada'";
                    $res = $db->query($query2);
                    ?>

                    <div class=" table-responsive">
                        <table id="snuevas" class="table table-sm table-striped table-hover mt-4 table-responsive">
                            <thead class="table-dark">
                                <tr>
                                    <th>Correo Electronico</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php while ($row_solicitud = $res->fetch_assoc()) : ?>

                                        <?php

                                        $query1 = "SELECT email FROM usuarios WHERE id_usuario = " . $row_solicitud['id_usuario'];
                                        $res1 = $db->query($query1);
                                        $datos1 = $res1->fetch_assoc();
                                        ?>


                                        <td> <?php echo $datos1['email'] ?> </td>
                                        <td> <?php echo $row_solicitud['fecha'] ?> </td>
                                        <td>
                                            <a href="versoli.php?id=<?php echo $row_solicitud['id_usuario'] ?>" class="btn btn-outline-dark"><i class="fa-regular fa-eye"></i>Ver</a>
                                        </td>
                                    <?php endwhile ?>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class=" col-lg-4 col-sm-12  mt-2">
                    <h3 class="text text-center">Revisión</h3>

                    <?php
                    include '../../Conection/cn.php';

                    $query3 = "SELECT id_usuario,fecha FROM solicitudes WHERE estado = 'Revision'";
                    $res3 = $db->query($query3);
                    ?>

                    <div class=" table-responsive table-hover">
                        <table id="revision" class="table table-sm table-striped table-hover mt-4 table-responsive">
                            <thead class=" table-primary">
                                <tr>
                                    <th>Correo Electronico</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php while ($row_revision = $res3->fetch_assoc()) : ?>

                                        <?php

                                        $query1 = "SELECT email FROM usuarios WHERE id_usuario = " . $row_revision['id_usuario'];
                                        $res1 = $db->query($query1);
                                        $datos = $res1->fetch_assoc();
                                        ?>


                                        <td> <?php echo $datos['email'] ?> </td>
                                        <td> <?php echo $row_revision['fecha'] ?> </td>
                                        <td>
                                            <a href="versoli.php?id=<?php echo $row_revision['id_usuario'] ?>" class="btn btn-outline-dark"><i class="fa-regular fa-eye"></i>Ver</a>
                                        </td>
                                    <?php endwhile ?>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=" col-lg-4 col-sm-12  mt-2">
                    <h3 class="text text-center">Aceptadas y rechazadas</h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Jquery/jquery-3.6.4.min.js"></script>


    <script>
        var $j = jQuery.noConflict();

        $j(document).ready(function() {
            $j('#snuevas').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Solicitudes",
                    "zeroRecords": "Sin resultados",
                    "info": "Mostrando solicitudes del _START_ al _END_ de un total de _TOTAL_ solicitudes",
                    "infoEmpty": "Mostrando solicitudes del 0 al 0 de un total de 0 solicitudes",
                    "infoFiltered": "(Filtrando de un total de _MAX_ solicitudes)",
                    "sSearch": "Buscar",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Ultimo",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing": "Procesando..."
                }
            });
        });

        var $a = jQuery.noConflict();
        $a(document).ready(function() {
            $j('#revision').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Solicitudes",
                    "zeroRecords": "Sin resultados",
                    "info": "Mostrando solicitudes del _START_ al _END_ de un total de _TOTAL_ solicitudes",
                    "infoEmpty": "Mostrando solicitudes del 0 al 0 de un total de 0 solicitudes",
                    "infoFiltered": "(Filtrando de un total de _MAX_ solicitudes)",
                    "sSearch": "Buscar",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Ultimo",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing": "Procesando..."
                }
            });
        });

    </script>


    <script type="text/javascript" src="../../DataTable/datatables.min.js"></script>
    <?php include '../../Layout/scripts.php' ?>
</body>

</html>