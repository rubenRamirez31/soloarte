<?php 
require '../Conection/cn.php';

$id = $db->real_escape_string($_POST['id']);

$query = "DELETE FROM promociones WHERE id_promociones = $id ";

if ($db->query($query)) {
    header('Location: /Paginas/Admin/index.php?resul=3');
} else {
    echo 'error al insertar';
    exit;
}

?>