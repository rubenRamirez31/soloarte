<?php
// <!-- LOGICA PARA EJECUTAR EL LOGIN -->
require '../Conection/cn.php';

$errores = [];

// Autenticar el usuario
$email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
$password = mysqli_real_escape_string($db, $_POST['password']);

if (!$email) {

    $errores[] = "El Email es obligatorio o no es valido";
}

if (!$password) {
    $errores[] = "El Password es obligatorio";
}

if (empty($errores)) { //validar el usuario

    //revisar si el usuario existe

    $query = "SELECT * FROM usuarios WHERE email = '$email' ";
    $resultado = mysqli_query($db, $query);

    if ($resultado->num_rows) {

        //Revisar si el password es correcto
        $usuario = mysqli_fetch_assoc($resultado);
        //Verificar si el password es correcto o no

        $auth = password_verify($password, $usuario['password']);

        if ($auth) {

            //El usuario esta autenticado
            session_start();

            //LLenar el arreglo de la sesion
             $_SESSION['usuario'] = $usuario['email'];
             $_SESSION['login'] = true;

            echo 'autenticado';

        } else {

            $errores[] = "La contraseña es incorrecta";
        }
    } else {
        $errores[] = "El usuario no existe";
    }
}
