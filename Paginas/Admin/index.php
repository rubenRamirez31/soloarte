<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>SoloArte</title>
</head>

<body>
    <?php include '../../Layout/navbar.php' ?>


    <?php

    $resultado = $_GET['resul'] ?? null;

    if ($resultado === "1") : ?>
        <script>
            Swal.fire(
                'Producto Creado Correctamente',
                '',
                'success'
            );
        </script>

    <?php elseif ($resultado === "2") : ?>

        <script>
            Swal.fire(
                'Producto Actualizado Correctamente',
                '',
                'success'
            );
        </script>

    <?php elseif ($resultado === "3") : ?>

        <script>
            Swal.fire(
                'Producto Eliminado Correctamente',
                '',
                'success'
            );
        </script>

    <?php endif;  ?>




    <?php

    //conexion para la base de datos y consultar los productos

    require '../../Conection/cn.php';

    $query = "SELECT * FROM productos";
    $productos = $db->query($query);

    ?>
    <div class="container py-3">
        <h1 class="text text-center">Productos</h1>


        <div class="row justify-content-between">
            <div class="col-auto">
                <label for="campo">Buscar</label>
                <input type="text" class=" form-control" id="campo" name="campo">
            </div>
            <div class="col-auto d-flex align-items-end">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarModal"><i class="fa-solid fa-circle-plus mr-1" style="margin-right: 5px;"></i>Nuevo Producto</a>
            </div>
        </div>


        <table class="table table-sm table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th class="text text-center">Acción</th>
                </tr>
            </thead>
            <tbody id="content">



























                <!-- <?php while ($row_producto = $productos->fetch_assoc()) : ?>

                        <tr>
                            <td> <?php echo $row_producto['id_producto'] ?> </td>
                            <td> <?php echo $row_producto['nombre'] ?> </td>
                            <td> <?php echo $row_producto['id_imagen'] ?> </td>
                            <td> <?php echo $row_producto['descripcion'] ?> </td>
                            <td> <?php echo $row_producto['precio'] ?> </td>
                            <td> <?php echo $row_producto['stock'] ?> </td>
                            <td class=" d-lg-flex justify-content-around">
                                <div>
                                    <a href="#" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#actualizarModal" data-bs-id="<?php echo $row_producto['id_producto'] ?>">
                                        <i class="fa-solid fa-pen-to-square"></i> Actualizar</a>

                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal" data-bs-id="<?php echo $row_producto['id_producto'] ?>"><i class="fa-solid fa-trash"></i> Eliminar</a>

                                </div>
                            </td>
                        </tr>

                <?php endwhile ?> -->
            </tbody>
        </table>

    </div>

    <script src="../../Jquery/jquery-3.6.4.min.js"></script>


    <script>
        /*  if (window.performance.navigation.type == 1) {
            location.replace('http://localhost:3000/Paginas/Admin/index.php');
        } else if (window.performance.navigation.type == 2) {
            location.replace('http://localhost:3000/Paginas/Admin/index.php');
        } else if (window.performance.navigation.type == 3) {
            location.replace('http://localhost:3000/Paginas/Admin/index.php');
        } */
    </script>



    <?php include '../../Modales/agregarModal.php'; ?>
    <?php include '../../Modales/actualizarModal.php'; ?>
    <?php include '../../Modales/EliminarModal.php'; ?>



    <script>
        let actualizarModal = document.getElementById('actualizarModal');
        let eliminarModal = document.getElementById('eliminarModal');


        actualizarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            let inputId = actualizarModal.querySelector('.modal-body #id');
            let inputNombre = actualizarModal.querySelector('.modal-body #nombre');
            let inputDescripcion = actualizarModal.querySelector('.modal-body #descripcion');
            let inputPrecio = actualizarModal.querySelector('.modal-body #precio');
            let inputStock = actualizarModal.querySelector('.modal-body #stock');

            let url = "../../Transacciones/getProductos.php";

            let formData = new FormData();
            formData.append('id', id);

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {
                    inputId.value = data.id_producto
                    inputNombre.value = data.nombre
                    inputDescripcion.value = data.descripcion
                    inputPrecio.value = data.precio
                    inputStock.value = data.stock

                }).catch(err => console.log(err))
        });

        eliminarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            eliminarModal.querySelector('.modal-footer #id').value = id;

        });
    </script>

    <script>

    <!-- <script>
            getData();

            document.getElementById("campo").addEventListener("keyup", getData);

            function getData() {
                let input = document.getElementById("campo").value;
                let content = document.getElementById("content");

                let url = "../../Transacciones/cagarRegistros.php";

                let formData = new FormData();

                formData.append('campo', input);

            fetch(url, {
                method: "POST",
                body: formData
            }).then(response => response.json())
            .then(data => {
                content.innerHTML = data
            }).catch(err => console.log(err))
        }

    </script>

    <?php include '../../Layout/scripts.php' ?>
</body>

</html>