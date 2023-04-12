<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../Layout/estilos.php'  ?>
    <title>SoloArte</title>
</head>

<body>
    <?php include '../Layout/navbar.php' ?>

    <?php if (  $_GET["resul"] === "1") : ?>

        <script>
            Swal.fire(
                'Producto Agregado Correctamente',
                '',
                'success'
            );
        </script>

    <?php endif ?>




    <?php 
    
    //conexion para la base de datos y consultar los productos

    require '../Conection/cn.php';

    $query = "SELECT * FROM productos";

    $productos = $db->query($query);


    ?>



    <div class="container py-3">
        <h1 class="text text-center">Productos</h1>


        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarModal"><i class="fa-solid fa-circle-plus mr-1" style="margin-right: 5px;"></i>Nuevo Registro</a>
            </div>
        </div>


        <table class="table table-sm table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row_producto = $productos->fetch_assoc()) : ?>

                    <tr>
                        <td> <?php echo $row_producto['id_producto'] ?> </td>
                        <td> <?php echo $row_producto['nombre'] ?> </td>
                        <td> <?php echo $row_producto['id_imagen'] ?> </td>
                        <td> <?php echo $row_producto['descripcion'] ?> </td>
                        <td> <?php echo $row_producto['precio'] ?> </td>
                        <td> <?php echo $row_producto['stock'] ?> </td>
                        <td> --- </td>
                    </tr>

                <?php endwhile ?>
            </tbody>
        </table>

    </div>



    <?php include '../Modales/agregarModal.php'; ?>
    <?php include '../Layout/scripts.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
</body>

</html>