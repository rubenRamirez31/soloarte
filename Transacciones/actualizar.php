<!-- En este archivo se actualizan los datos de los productos -->

<?php

//Esta condicion es para validar que cuando entre a la pagina, indique si se esta haciendo
//un metodo post y si no es asi nos regresara al index, esto para poder proteger 
// el archivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    //Mandamos a llamar el archivo de la conexcion a la base de datos
    require '../Conection/cn.php';

    //Guardamos los datos que se envian del formulario
    // con la funcion de filtrar los datos, oara evitar insersion de codigo sql    
    $id = $db->real_escape_string($_POST['id']);
    $nombre = $db->real_escape_string($_POST['nombre']);
    $descripcion = $db->real_escape_string($_POST['descripcion']);
    $precio = $db->real_escape_string($_POST['precio']);
    $stock = $db->real_escape_string($_POST['stock']);


    //Este codigo sql es para mandar a actalizar los datos a la bd
    $query = "UPDATE  productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, stock = $stock 
    WHERE id_producto = $id ";


    if ($db->query($query)) { //si la variable de la conexion regresa un true, o fue exitosa
        //nos regresara al index de la carpeta Admin con una alerta indicando que fue se manera exitosa
       header('Location:/soloarte/Paginas/Admin/index.php?resul=2');
    } else {
        //de otro modo habra un echo con un mnesaje de error
        echo 'error al insertar';
        exit;
    }
} else {
    //Este else es para que cuando se trate de entrar al archivo sin enviar datos por metodo POST 
    //nos regrese a la pagina principal
    header('Location: /soloarte');
}
