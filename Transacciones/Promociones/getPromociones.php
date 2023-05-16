<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../Conection/cn.php';

$id = $db->real_escape_string($_POST['id']);

$query = "SELECT nombre,descripcion,Link FROM Promociones WHERE id_Promocion = $id LIMIT 1";

$resultado = $db->query($query);

$rows = $resultado->num_rows;

$promocion = [];

if ($rows > 0) {
    $promocion = $resultado->fetch_array();
}

echo json_encode($promocion, JSON_UNESCAPED_UNICODE);

} else {
    header('Location: /soloarte');
}
