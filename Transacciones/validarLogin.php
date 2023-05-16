<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // <!-- LOGICA PARA EJECUTAR EL LOGIN -->
    require '../Conection/cn.php';

    // Autenticar el usuario
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);


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
            $_SESSION['usuario'] = $usuario['id_usuario'];
            $_SESSION['rol'] = $usuario['id_rol'];
            $_SESSION['nombre'] = $usuario['nombre'];

            if ($_SESSION['rol'] != 1) {
                header('Location:/soloarte/Paginas/Usuario/Productos.php');
            } else {
                header('Location:/soloarte/Paginas/Admin');
            }
        }
    }
} else {
    header('Location: /soloarte');
}
