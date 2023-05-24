<?php

//Eliminar Producto

//Autor: Manuel Santos Mendo

//Proteger el archivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../Conection/cn.php';
    $id = $db->real_escape_string($_POST['id']);
    $query = "DELETE FROM productos WHERE id_producto = $id ";

    if ($db->query($query)) {
        header('Location: /soloarte/Paginas/Admin/index.php?resul=3');
    } else {
        header('Location: /soloarte/Paginas/Admin/index.php?resul=4');
    }
} else {
    header('Location: /soloarte');
}

//Fecha de creacion: 13/05/2023