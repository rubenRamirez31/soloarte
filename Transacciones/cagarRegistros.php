<?php
require '../Conection/cn.php';

$columnas = ['id_producto', 'id_imagen', 'nombre', 'descripcion', 'precio', 'stock'];

$table = 'productos';

$campo = isset($_POST['campo']) ? $db->real_escape_string($_POST['campo']) : null;

$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columnas);
    for ($i=0; $i < $cont ; $i++) { 
        $where .= $columnas[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "",-3);
    $where .= ")";
}

$query = "SELECT " . implode(", ", $columnas) . "
FROM $table $where ";
$resultado = $db->query($query);

$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['id_producto'] . '</td>';
        $html .= '<td>' . $row['nombre'] . '</td>';
        $html .= '<td>' . $row['id_imagen'] . '</td>';
        $html .= '<td>' . $row['descripcion'] . '</td>';
        $html .= '<td>' . $row['precio'] . '</td>';
        $html .= '<td>' . $row['stock'] . '</td>';
        $html .= '<td'. ' class="d-lg-flex justify-content-around">' . 
                '<div>'
                   . '<a href="#" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#actualizarModal" data-bs-id="'. $row["id_producto"] .'">
                    <i class="fa-solid fa-pen-to-square"></i> Actualizar</a>
                </div>
        <div>' .
            '<a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal" data-bs-id="'. $row["id_producto"] .'"><i class="fa-solid fa-trash"></i> Eliminar</a>
        </div>
           </td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7" class="text text-center">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
