
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
    <?php include '../../Layout/estilos.php' ?>
    <title>Usuarios</title>
</head>

<body>
    <?php include '../../Layout/navbar.php' ?>

    <?php
    //Conexion con la base de datos y consulta de los usuarios
    require '../../Conection/cn.php';
    $query = "SELECT * FROM usuarios";
    $usuarios = $db->query($query);
    ?>
    <div class="container py-3">
        <h1 class="text text-center">Usuarios</h1>

        <div class="table-responsive">
            <table id="usuarios" class="table table-sm table-striped table-hover mt-4 table-responsive">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Rol</th>
                        <th class="text text-center">Acciones</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    while ($row_usuario = $usuarios->fetch_assoc()) : ?>
                        <tr>
                            <td>
                                <?php echo $row_usuario['id_usuario'] ?>
                            </td>
                            <td>
                                <?php echo $row_usuario['nombre'] ?>
                            </td>
                            <td>
                                <?php echo $row_usuario['apepat'] ?>
                            </td>
                            <td>
                                <?php echo $row_usuario['apemat'] ?>
                            </td>
                            <td>
                                <?php echo $row_usuario['email'] ?>
                            </td>
                            <td>
                                <?php echo $row_usuario['telefono'] ?>
                            </td>

                            <?php
                            $query = "SELECT rol FROM roles INNER JOIN usuarios 
                            ON roles.id_rol = usuarios.id_rol WHERE
                             usuarios.id_usuario = " . $row_usuario['id_usuario'];

                            $nombre = $db->query($query);
                            ?>
                            <td>
                                <?php while ($row_nombre = $nombre->fetch_assoc()) : ?>

                                    <?php echo $row_nombre['rol'] ?>

                                <?php endwhile ?>
                            </td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarUsuarioModal" data-bs-id="<?php echo  $row_usuario['id_usuario'] ?>">
                                        <i class="fa-solid fa-user-slash"></i> Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../../Jquery/jquery-3.6.4.min.js"></script>
    <?php include '../../Modales/eliminarUsuarioModal.php'; ?>

    <script>
        let eliminarModal = document.getElementById('eliminarUsuarioModal');

        eliminarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            eliminarModal.querySelector('.modal-footer #id').value = id;

        });
    </script>

    <script>
        var $j = jQuery.noConflict();

        $j(document).ready(function() {
            $j('#usuarios').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Usuarios",
                    "zeroRecords": "Sin resultados",
                    "info": "Mostrando usuarios del _START_ al _END_ de un total de _TOTAL_ usuarios",
                    "infoEmpty": "Mostrando usuarios del 0 al 0 de un total de 0 usuarios",
                    "infoFiltered": "(Filtrando de un total de _MAX_ usuarios)",
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