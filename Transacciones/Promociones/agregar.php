<?php 
require '../Conection/cn.php';

$nombre = $db->real_escape_string($_POST['nombre']) ;
$descripcion = $db->real_escape_string($_POST['descripcion']) ;
$link = $db->real_escape_string($_POST['link']);

$query = "INSERT INTO promociones (nombre,descripcion,link)
VALUES('$nombre','$descripcion',$link)";

if ($db->query($query)) {
    header('Location: /soloarte/Paginas/Admin/index.php?resul=1');
} else {
    echo 'error al insertar';
    exit;
}

?>