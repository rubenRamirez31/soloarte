<!-- Autor: Ruben Ramirez Hernandez -->


<!-- Este archivo funciona para crear un usuario -->

<?php

//Condicion para proteger el archivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //llamada al archivo con la conexcion a la base de datos
    require '../Conection/cn.php';

    //Guardamos en las variables los datos enviados por el formulario
    $nombre = $_POST['nombre'];
    $apepat = $_POST['apepat'];
    $apemat = $_POST['apemat'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usuario = $_POST['usuario'];
    $rol = 2;

    //funcion para hashear las contraseñas 
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    //funcion para que el email siempre sea en minusculas
    $emaillower = strtolower($email);

    //Codig para buscar por el email ingresado 
    $query2 = "SELECT * FROM usuarios WHERE email = '$emaillower'";
    $resultado = mysqli_query($db, $query2);


    //si el resultado regresa un resultado significa que el email ya existe
    if ($resultado->num_rows >= 1) {

        //Por lo tanto regresara a la pagina de registro con una alerta de que el email ya existe
        header('Location: /soloarte/Paginas/crearUsuario.php?resul=1');
    } else {
        //Por el contrario si no hay coincidencias entramos a este bloque de codigo.
        //Query para crear el usuario
        $query = "INSERT INTO usuarios (nombre,apepat,apemat,email,password,usuario,id_rol) VALUES ('$nombre','$apepat','$apemat','$emaillower','$passwordHash','$usuario','$rol')";
        //agregarlo a la base de datos
        if ($db->query($query)) {
            //si el resultado es exitoso nos regresa al login con un mensaje de exitoso
            header('Location:/soloarte/Paginas/login.php?resul=1');
        } else {
            //de no poder hacer la insersion regresara un mensaje de que ah ocurrido un error
            header('Location:/soloarte/Paginas/crearUsuario.php?resul=2');
        }
    }
} else {
    //si se accede al archivo si metodo post nos regresara al index principal
    header('Location: /soloarte');
}
