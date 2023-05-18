<?php

//Ssession_start();

include("../../Conection/cn.php");

?>
<?php


// if (!isset($_SESSION['usuario'])) {
// header("Location: NoAutenticado.php");


// }

// if ($_SESSION['rol'] != 1) {

//     header("Location: NoAutorizado.php");

// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Promociones</title>
    <?php
    include("../../Layout/estilos.php");
    ?>
</head>

<body>
    <?php //include '../../Layout/navbar.php' ?>
    <?php include '../../Layout/navbarU.php' ?>


    <?php

    $resultado = $_GET['resul'] ?? null;

    if ($resultado === "1"): ?>
        <script>
            Swal.fire(
                'Promocion creada Correctamente',
                '',
                'success'
            );
        </script>

    <?php elseif ($resultado === "2"): ?>

        <script>
            Swal.fire(
                'Promocion Actualizada Correctamente',
                '',
                'success'
            );
        </script>

    <?php elseif ($resultado === "3"): ?>

        <script>
            Swal.fire(
                'Promocion Eliminada ',
                '',
                'success'
            );
        </script>

    <?php endif; ?>


    <div class="container mt-3">
        <h3 class="text text-center">Promociones Disponibles</h3>

        <?php if ($_SESSION['rol'] == 1): ?>
            <div class="row justify-content-end">

                <div class="col-auto d-flex align-items-end mb-2">
                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#agregarpromoModal"><i class="fa-solid fa-circle-plus mr-1"
                            style="margin-right: 5px;"></i>Nueva Promocion</a>
                </div>
            </div>
        <?php endif ?>


        <?php

        $query = "select * from Promociones";
        $promociones = $db->query($query);

        ?>

        <div class='row'>
            <?php while ($row_promociones = $promociones->fetch_assoc()): ?>
                <div class='col-sm-12 col-md-4 d-flex justify-content-center mt-4 mb-4'>
                    <div class='card' style='width: 18rem;'>
                        <?php
                        $imageData = $row_promociones['imagen'];
                        if (!empty($imageData)) {
                            // Encode the image data using base64
                            $encodedImage = base64_encode($imageData);
                            // Embed the encoded image in the img tag using the data URI scheme
                            echo "<img src='data:image/jpeg;base64,$encodedImage' class='card-img-top' alt='N/A'>";
                        }
                        ?>

                        <ul class='list-group list-group-flush'>

                            <li class='list-group-item'> <span style="font-weight: bold;">Nombre:</span>
                                <?php echo $row_promociones['nombre']; ?>
                            </li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Descripcion:</span>
                                <?php echo $row_promociones['descripcion']; ?><span></span>
                            </li>

                            <li class='list-group-item'> <span style="font-weight: bold;">Link:</span>
                                <?php echo $row_promociones['Link']; ?>
                            </li>


                            <?php
                            if ($_SESSION['rol'] == 1): ?>

                                <div>
                                    <a href="#" class="mt-3 btn btn-outline-warning" data-bs-toggle="modal"
                                        data-bs-target="#actualizarpromoModal"
                                        data-bs-id="<?php echo $row_promociones['Id_Promocion'] ?>">
                                        <i class="fa-solid fa-pen-to-square"></i> Actualizar</a>
                                    <a href="#" class="mt-3 btn btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#eliminarprpmoModal"
                                        data-bs-id="<?php echo $row_promociones['Id_Promocion'] ?>">
                                        <i class="fa-solid fa-trash"></i> Eliminar</a>

                                </div>
                                <div>


                                </div>
                            <?php endif ?>

                            <?php if ($_SESSION['rol'] == 2): ?>
                                <a href=' <?php echo $row_promociones['Link']; ?>' class='mt-3 btn btn-outline-primary'>Mas
                                    Información</a>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            <?php endwhile ?>
        </div>

    </div>
    <?php include '../../Modales/agregarpromoModal.php'; ?>
    <?php include '../../Modales/actualizarpromoModal.php'; ?>
    <?php include '../../Modales/eliminarpromoModal.php'; ?>
    <?php include '../../Modales/agregarimgpromoModal.php'; ?>

    <script>
        let actualizarpromoModal = document.getElementById('actualizarpromoModal');
        let eliminarpromoModal = document.getElementById('eliminarpromoModal');
        let agregarimgpromoModal = document.getElementById('agregarimgpromoModal');


        actualizarpromoModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            let inputId = actualizarpromoModal.querySelector('.modal-body #id');
            let inputNombre = actualizarpromoModal.querySelector('.modal-body #nombre');
            let inputDescripcion = actualizarpromoModal.querySelector('.modal-body #descripcion');
            let inputLink = actualizarpromoModal.querySelector('.modal-body #link');


            let url = "../../Transacciones/Promociones/getPromociones.php";

            let formData = new FormData();
            formData.append('id', id);

            fetch(url, {
                method: "POST",
                body: formData
            }).then(response => response.json())
                .then(data => {
                    inputId.value = data.Id_Promocion
                    inputNombre.value = data.nombre
                    inputDescripcion.value = data.descripcion
                    inputLink.value = data.Link


                }).catch(err => console.log(err))
        });

        eliminarpromoModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            eliminarpromoModal.querySelector('.modal-footer #id').value = id;

        });

        agregarimgpromoModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            eliminarpromoModal.querySelector('.modal-footer #id').value = id;

        });
    </script>
    <?php
    include("../../Layout/scripts.php");
    ?>

</body>

</html>