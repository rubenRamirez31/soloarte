<!-- Autor: Ruben Ramirez Hernandez -->

<!-- En este archivo se inserta el numero telefonico del usuario -->
<?php

//Esta condicion es para validar que cuando entre a la pagina, indique si se esta haciendo
//un metodo post y si no es asi nos regresara al index, esto para poder proteger 
// el archivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //llamamos a la conexion de base de datos
    include '../Conection/cn.php';

    //guardamos los valores enviados pro metodo POST
    $idusuario = $_POST['id'];
    $num = $_POST['telefono'];

    //codigo sql para actualizar los datos 
    $query = "UPDATE usuarios SET telefono = $num WHERE id_usuario = $idusuario";

    //Si el resulta es exitoso nos regresara a la siguiente direccion
    if ($db->query($query)) {
        header('Location:/soloarte/Paginas/Usuario/PerfilUsuario.php?resul=1');
    }
} else {

    //Si al ingrear a la pagina no detecta el metodo de envio post se segresa al index principal
    header('Location: /soloarte');
}

//Fecha: 15/05/2023