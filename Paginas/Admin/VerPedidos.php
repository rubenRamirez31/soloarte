<?php

session_start();

    include("../../Conection/cn.php");
       
?>
<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header("Location: NoAutenticado.php");


    }

    if ($_SESSION['idUsuRol'] != 1) {

        header("Location: NoAutorizado.php");

    }
       
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Creadores</title>
    <?php
    include("../../Layout/estilos.php");
    ?>
</head>
<body>


<div class="container mt-3">
    <h3 class= "text text-center">Creadores</h3>


 
<?php
    $query = "select * from pedidos";
    $pedidos = $db->query($query);
 
?>

       <div class='row'>
            <?php while ($row_pedidos = $creadores->fetch_assoc()) :  ?>
                <div class='col-4 mt-4'>
                    <div class='card' style='width: 18rem;'>


                
                        <ul class='list-group list-group-flush'>
                        
                            <li class='list-group-item'> <span style="font-weight: bold;">Numero de pedido:</span> <?php echo $row_creadores['id_pedido'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Total de artiuculos:</span> <?php echo $row_creadores['cantidad'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Descripcion:</span> <?php echo $row_creadores['v'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Total paga:</span> <?php echo $row_creadores['total'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Estado:</span> <?php echo $row_creadores['estado'];?></li>

                            <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i>confirmar pago</button>
                            <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i>confirmar entrega</button>
                            
                        </span> 
                            
                           
                            
                        </ul>
                    </div>
                </div>
            <?php endwhile ?>
        </div>    

</div>
</body>
</html>