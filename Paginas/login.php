<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../Layout/estilos.php'  ?>
    <title>Inicia Sesion</title>
</head>

<body>
    <?php include '../Layout/navbar.php' ?>


    <?php if ($_GET["resul"] === "1") : ?>
        <!-- Codigo para activar sweet alert -->
        <script>
            Swal.fire(
                'Usuario Creado Correctamente',
                '',
                'success'
            );
        </script>

    <?php endif ?>
    

    <?php include '../Layout/scripts.php' ?>
</body>

</html>


<!-- LOGICA PARA EJECUTAR EL LOGIN -->

<?php
//Incluye el header
require '../Conection/cn.php';

// //conexion a la base de datos
// require 'includes/config/database.php';

// $db = conectarDB();

// $errores = [];

// //Autenticar el usuario
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

//     $password = mysqli_real_escape_string($db, $_POST['password']);

//     if (!$email) {

//         $errores[] = "El Email es obligatorio o no es valido";
//     }

//     if (!$password) {
//         $errores[] = "El Password es obligatorio";
//     }

//     if (empty($errores)) { //validar el usuario

//         //revisar si el usuario existe

//         $query = "SELECT * FROM usuarios WHERE email = '${email}'";
//         $resultado = mysqli_query($db, $query);



//         if ($resultado->num_rows) {

//             //Revisar si el password es correcto
//             $usuario = mysqli_fetch_assoc($resultado);
//             // var_dump($usuario);

//             //Verificar si el password es correcto o no

//             $auth = password_verify($password, $usuario['password']);

//             // var_dump($auth);

//             if ($auth) {
//                 // El usuario esta autenticado
//                 session_start();

//                 //LLenar el arreglo de la sesion
//                 $_SESSION['usuario'] = $usuario['email'];
//                 $_SESSION['login'] = true;

//                 header('location: /admin');

//             } else {

//                 $errores[] = "La contraseña es incorrecta";
//             }
//         } else {
//             $errores[] = "El usuario no existe";
//         }
//     }
// }