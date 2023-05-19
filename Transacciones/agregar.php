<!-- En este archivo se insertan los datos de los productos -->
<?php 

//Esta condicion es para validar que cuando entre a la pagina, indique si se esta haciendo
//un metodo post y si no es asi nos regresara al index, esto para poder proteger 
// el archivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    require '../Conection/cn.php';

$nombre = $db->real_escape_string($_POST['nombre']) ;
$descripcion = $db->real_escape_string($_POST['descripcion']) ;
$precio = $db->real_escape_string($_POST['precio']);
$stock = $db->real_escape_string($_POST['stock']);

$query = "INSERT INTO productos (nombre,descripcion,precio,stock)
VALUES('$nombre','$descripcion',$precio,$stock)";

if ($db->query($query)) {
    header('Location: /soloarte/Paginas/Admin/index.php?resul=1');
} else {
    echo 'error al insertar';
    exit;
}
} else {
    header('Location: /soloarte');
}
