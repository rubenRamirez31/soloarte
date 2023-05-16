<?php
session_start();

//conexion para la base de datos y consultar los productos

require '../../../Conection/cn.php';


$id = $_GET['idProducto'];


$query = "select * from productos where id_producto = $id";
$producto = $db->query($query);
$row_productos = $producto->fetch_assoc();

?>


<form id="formulario" name="formulario" method="post" action="../Carrito/cart.php">

    <input name="precio" type="hidden" id="precio" value="<?php echo $row_productos['precio']; ?>" />
    <input name="titulo" type="hidden" id="titulo" value="<?php echo $row_productos['nombre']; ?>" />
    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
    <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>



</form>
