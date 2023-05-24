<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>Mi Perfil</title>
</head>

<body>
    <?php include '../../Layout/navbarU.php' ?>

    <?php

    $resultado = $_GET['resul'] ?? null;

    if ($resultado === "1") : ?>
        <script>
            Swal.fire(
                'Numero Agregado Correctamente',
                '',
                'success'
            );
        </script>

    <?php elseif ($resultado === "2") : ?>
        <script>
            Swal.fire(
                'Imagen Actualizada Correctamente',
                '',
                'success'
            );
        </script>
    <?php elseif ($resultado === "3") : ?>
        <script>
            Swal.fire(
                'Algo salio mal',
                '',
                'error'
            );
        </script>
    <?php elseif ($resultado === "4") : ?>
        <script>
            Swal.fire(
                'Solicitud Enviada Correctamente',
                'Puede ver el estatus de su solicitud en su perfil, tenga en cuenta que la revisión puede tardar hasta 7 días hábiles. ',
                'success'
            );
        </script>

    <?php elseif ($resultado === "5") : ?>
        <script>
            Swal.fire(
                'Algo salio mal',
                'Inténtelo de nuevo.',
                'error'
            );
        </script>
    <?php endif ?>




    <?php

    include '../../Conection/cn.php';
    $idusuario = $_SESSION['usuario'];
    $query = "SELECT * FROM usuarios WHERE id_usuario = $idusuario ";
    $usuarios = $db->query($query);
    $datos = $usuarios->fetch_assoc();

    ?>

    <div class="container mt-5 mb-1">

        <div class="row justify-content-between">
            <div class="col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="">
                    <div>
                        <div>
                            <?php if ($datos['imgPerfil']) : ?>
                                <img style=" height: 180px; width:180px object-fit: scale-down;  border-radius: 10px;" src="../../Transacciones/obtenerimgU.php?id=<?php echo $idusuario ?>" alt="Imagen Perfil" class="img-fluid img-thumbnail" style="z-index: 1;">
                            <?php endif ?>

                            <?php if (!$datos['imgPerfil']) : ?>
                                <img style="  height: 180px; width: 180px; object-fit: scale-down;  border-radius: 10px;" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="Imagen Perfil" class="img-fluid img-thumbnail" style=" z-index: 1;">
                            <?php endif ?>

                        </div>
                        <div class="">
                            <a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#imgUsuarioModal" data-bs-id="<?php echo $idusuario ?>"><i class="fa-solid fa-pencil"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8 col-sm-12 ">
                <h1 class="text text-center">Mi Perfil</h1>
                <div>
                    <div class="d-flex justify-content-between mt-lg-5 mb-2">
                        <div class=" col-lg-6 col-sm-12 mt-3 mx-4">
                            <h5 class="text text-center">Datos Generales</h5>
                            <div class=" container-sm border border-dark">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h5>Personales</h5>
                                        <h6>Nombre: </h6>
                                        <p> <?php echo $datos['nombre'] . " " . $datos['apepat'] . " " . $datos['apemat'] ?> </p>
                                        <h6>Correo: </h6>
                                        <p> <?php echo $datos['email'] ?> </p>
                                        <h6>Usuario: </h6>
                                        <p> <?php echo $datos['usuario'] ?> </p>
                                        <h6>Telefono: </h6>
                                        <?php if (!$datos['telefono']) : ?>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#AgregarNumModal" data-bs-id="<?php echo $datos['id_usuario']; ?>" class="btn btn-outline-warning"> <i class="fa-solid fa-plus"></i> Agregar</a>
                                        <?php endif ?>
                                        <?php if ($datos['telefono']) : ?>
                                            <p> <?php echo $datos['telefono'] ?> </p>
                                        <?php endif ?>

                                    </li>
                                    <?php
                                    $query = "SELECT * FROM direcciones WHERE id_usuario = $idusuario";
                                    $res = $db->query($query);   ?>

                                    <li class="list-group-item">
                                        <h5>Direcciones</h5>
                                        <?php while ($direccion = $res->fetch_assoc()) : ?>
                                            <p> <?php echo $direccion['calle'] . " ,Colonia " . $direccion['colonia'] . " ," . $direccion['ciudad'] . " ," . $direccion['estado'] . " ," . $direccion['codigo_postal'] ?> </p>
                                        <?php endwhile ?>

                                        <a class="btn btn-outline-dark" href="#"><i class="fa-solid fa-plus"></i> Agregar</a>
                                    </li>

                                    <li class="list-group-item">
                                        <h5>Metodos de Pago</h5>

                                        <a class="btn btn-outline-dark" href="#"><i class="fa-solid fa-plus"></i> Agregar</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12 mt-3">
                            <h5 class="text text-center">Mis pedidos</h5>
                            <div class=" container-sm border border-dark">
                                <h6 class="text text-center">Aun no hay pedidos</h6>
                            </div>
                        </div>
                    </div>

                    <?php
                    $query2 = "SELECT id_usuario,estado FROM solicitudes WHERE id_usuario = $idusuario";
                    $res = $db->query($query2);
                    $info = $res->fetch_assoc();

                    ?>
                    <?php if ($info['estado'] === 'Aceptada') : ?>
                        <div class="container">
                            <h3 class="text-center">Mis productos</h3>

                            <?php

                            $query = "SELECT * FROM productos WHERE idusuarioasociado = $idusuario ";
                            $productos = $db->query($query);


                            ?>

                            <div class="table-responsive">
                                <table id="productos" class="table table-sm table-striped table-hover mt-4 table-responsive">
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
                                    <tbody>

                                        <?php while ($row_producto = $productos->fetch_assoc()) : ?>

                                            <tr>
                                                <td> <?php echo $row_producto['id_producto'] ?> </td>
                                                <td> <?php echo $row_producto['nombre'] ?> </td>

                                                <?php
                                                $query = "SELECT * FROM imagenes WHERE id_producto = " . $row_producto['id_producto'];
                                                $resultado = mysqli_query($db, $query);
                                                ?>
                                                <td class="">
                                                    <?php if (!$resultado->num_rows) : ?>
                                                        <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#agregarimgModal" data-bs-id="<?php echo $row_producto['id_producto'] ?>"><i class="fa-regular fa-images"></i> Agregar Imagenes</a>
                                                    <?php endif ?>

                                                    <?php if ($resultado->num_rows >= 1) : ?>
                                                        <!-- <a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#verimgModal" data-bs-id="<?php echo $row_producto['id_producto'] ?>"><i class="fa-regular fa-eye"></i> Ver Imagenes</a> -->
                                                        <a href="verimg.php?id=<?php echo $row_producto['id_producto'] ?>" class="btn btn-outline-dark"><i class="fa-regular fa-eye"></i> Ver Imagenes</a>
                                                    <?php endif ?>

                                                </td>
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

                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    <?php endif ?>


                </div>



            </div>

            <div class="col-lg-2 col-sm-12 d-flex justify-content-center ">

                <?php

                // $query2 = "SELECT id_usuario,estado FROM solicitudes WHERE id_usuario = $idusuario";
                // $res = $db->query($query2);
                // $info = $res->fetch_assoc();

                ?>
                <div class="container d-flex justify-content-center" style="max-height: 40px;">

                    <?php if (isset($info['estado'])) : ?>
                        <h3>Estado de solicitud: <span class="text text-primary"><?php echo $info['estado']; ?></span> </h3>
                    <?php endif ?>
                    <?php if ($info['estado'] === 'Aceptada') : ?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#agregarPusuarioModal" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                    <?php endif ?>
                    <?php if ($res->num_rows == null) : ?>
                        <a href="formulario.php" class="btn btn-primary">Asociarme</a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>


    <?php include '../../Modales/AgregarNumModal.php' ?>
    <?php include '../../Modales/imgUsuarioModal.php' ?>
    <?php include '../../Modales/agregarPusuarioModal.php' ?>
    <?php include '../../Modales/actualizarModal.php'; ?>
    <?php include '../../Modales/EliminarModal.php'; ?>

    <?php include '../../Modales/agregarimgModal.php'; ?>

    <script>
        let actualizarModal = document.getElementById('actualizarModal');
        let eliminarModal = document.getElementById('eliminarModal');
        let agregarimgModal = document.getElementById('agregarimgModal');

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

        agregarimgModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            agregarimgModal.querySelector('.modal-footer #id').value = id;

        });
    </script>

    <script>
        let AgregarNumModal = document.getElementById('AgregarNumModal');
        let imgUsuarioModal = document.getElementById('imgUsuarioModal');

        AgregarNumModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            AgregarNumModal.querySelector('.modal-body #id').value = id;

        });

        imgUsuarioModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            imgUsuarioModal.querySelector('.modal-footer #id').value = id;

        });
    </script>

    <?php include '../../Layout/scripts.php' ?>
</body>

</html>