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
    <?php include '../../Layout/navbarU.php' ?>

    <?php include '../../Conection/cn.php' ?>

    

    <div class="container mt-4">

        <h1 class="text text-center">Productos</h1>

        
 
<?php
session_start();
    $query = "select * from productos";
    $productos = $db->query($query); 
?>

<div class='row'>
            <?php while ($row_productos = $productos->fetch_assoc()) :  ?>
                <div class='col-4 mt-4'>
                    <div class='card' style='width: 18rem;'>
                    
                        <ul class='list-group list-group-flush'>
                        
                            <li class='list-group-item'> <span style="font-weight: bold;"></span> <?php echo $row_productos['nombre'];?></li>
                          
                            <li class='list-group-item'> <span style="font-weight: bold;">Precio:</span> <?php echo $row_productos ['precio']; ?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">En stock:</span> <?php echo $row_productos ['stock']; ?><span></span></li>
                            <a href='..' class='btn btn-success'>Agregar al Carrito</a> 
                            <a href='../Usuario/DetallesProducto.php?idProducto= <?php echo $row_productos ['precio']; ?>' class='btn btn-primary'>Mas Detalles</a> 


                        </span> 
                            
                           
                            
                        </ul>
                    </div>
                </div>
            <?php endwhile ?>
        </div>    

    </div>

    <?php include '../../Layout/scripts.php' ?>
</body>

</html>