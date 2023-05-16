<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../Conection/cn.php';

    $id = $db->real_escape_string($_POST['id']);

    $query = "DELETE FROM usuarios WHERE id_usuario = $id ";

    if ($db->query($query)) {
        header('Location: /soloarte/Paginas/Admin/Usuarios.php?resul=3');
    } else {
        echo 'Error al Eliminar';
        exit;
    }
} else {
    header('Location: /soloarte');
}
