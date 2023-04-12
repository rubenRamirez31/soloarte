<?php 
require '../Conection/cn.php';

$nombre = $db->real_escape_string($_POST['nombre']) ;
$descripcion = $db->real_escape_string($_POST['descripcion']) ;
$precio = $db->real_escape_string($_POST['precio']);
$stock = $db->real_escape_string($_POST['stock']);

$query = "INSERT INTO productos (nombre,descripcion,precio,stock)
VALUES('$nombre','$descripcion',$precio,$stock)";

if ($db->query($query)) {
    header('Location: /Paginas/index.php?resul=1');
} else {
    echo 'error al insertar';
    exit;
}

?>