<?php
require '../Conection/cn.php';

//aqui pillas lo que venga de post que enviaste en el formulario
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

$query2 = "SELECT * FROM usuarios WHERE email = '$emaillower'";
$resultado = mysqli_query($db, $query2);


//si el resultado regresa una fila
if ($resultado->num_rows >= 1) {

    header('Location: /soloarte/Paginas/crearUsuario.php?resul=1');

} else {
    //Query para crear el usuario
    $query = "INSERT INTO usuarios (nombre,apepat,apemat,email,password,usuario,id_rol) VALUES ('$nombre','$apepat','$apemat','$emaillower','$passwordHash','$usuario','$rol')";
    //agregarlo a la base de datos
    if ($db->query($query)) {
        header('Location: /soloarte/Paginas/login.php?resul=1');
    } else {
        header('Location: /soloarte/Paginas/crearUsuario.php?resul=2');
    }
}
