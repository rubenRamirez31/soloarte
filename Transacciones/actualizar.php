<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../Conection/cn.php';

    $id = $db->real_escape_string($_POST['id']);
    $nombre = $db->real_escape_string($_POST['nombre']);
    $descripcion = $db->real_escape_string($_POST['descripcion']);
    $precio = $db->real_escape_string($_POST['precio']);
    $stock = $db->real_escape_string($_POST['stock']);


    $query = "UPDATE  productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, stock = $stock 
WHERE id_producto = $id ";

    if ($db->query($query)) {
        header('Location:/soloarte/Paginas/Admin/index.php?resul=2');
    } else {
        echo 'error al insertar';
        exit;
    }
} else {
    header('Location: /soloarte');
}
