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
    <?php include '../../Layout/navbarU.php';
    include("../Admin/navbar.php");
    include("../Usuario/Carrito/nav_cart.php");
    include("../Usuario/Carrito/modal_cart.php");

    ?>

    <?php include '../../Conection/cn.php' ?>



    <div class="container mt-4">

        <h1 class="text text-center">Productos</h1>



        <?php

        $query = "select * from productos";
        $productos = $db->query($query);
        ?>
        <form id="formulario" name="formulario" method="post" action="../Usuario/Carrito/cart.php">
            <div class='row'>


                <?php while ($row_productos = $productos->fetch_assoc()) :  ?>
                    <div class='col-4 mt-4'>
                        <div class='card' style='width: 18rem;'>

                            <ul class='list-group list-group-flush'>

                                <input name="precio" type="hidden" id="precio" value="<?php echo $row_productos['precio']; ?>" />
                                <input name="titulo" type="hidden" id="titulo" value="<?php echo $row_productos['nombre']; ?>" />
                                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                                <li class='list-group-item'> <span style="font-weight: bold;"></span> <?php echo $row_productos['nombre']; ?></li>

                                <li class='list-group-item'> <span style="font-weight: bold;">Precio:</span> <?php echo $row_productos['precio']; ?></li>

                                <li class='list-group-item'> <span style="font-weight: bold;">En stock:</span> <?php echo $row_productos['stock']; ?><span></span></li>

                                <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                                <a href='../Usuario/DetallesProducto.php?idProducto= <?php echo $row_productos['id_producto']; ?>' class='btn btn-primary'>Mas Detalles</a>
                                
                                <a href='../Usuario/Carrito/ProductoSeleccionado.php?idProducto= <?php echo $row_productos['id_producto']; ?>' class='btn btn-success'>Añadir</a>


                                </span>



                            </ul>
                        </div>
                    </div>
                <?php endwhile ?>

            </div>

        </form>


    </div>

    <?php include '../../Layout/scripts.php' ?>


</body>

</html>