<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../Conection/cn.php';

$id = $db->real_escape_string($_POST['id']);

$query = "SELECT id_producto, nombre,descripcion,precio,stock FROM productos WHERE id_producto = $id LIMIT 1";

$resultado = $db->query($query);

$rows = $resultado->num_rows;

$producto = [];

if ($rows > 0) {
    $producto = $resultado->fetch_array();
}

echo json_encode($producto, JSON_UNESCAPED_UNICODE);

} else {
    header('Location: /soloarte');
}
