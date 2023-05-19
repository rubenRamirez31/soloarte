 <!-- Autor: Geovanni Alarcon Perez -->

<!--Este archivo tiene la funcion de cerrar la sesion del usuario -->

<?php
//Se inicia la funcion de sesion
session_start();

//Validamos si hay una sesion activa para poder cerrarla posterirmente
if (isset($_SESSION)) {
    //En caso de que sea verdadero se ejecuta el siguiente bloque de codigo:

    //Llamamos a la funcion session_destroy(); para eliminar todos los datos que haya en la super global de sesion
    session_destroy();
    //Una vez destruida la sesion nos regresara al index principal
    header("Location:/soloarte");
    die();
} else {
    //En caso de que no haya una sesion iniciada y se quiera acceder al archivo nos regresara al index
    header('Location: /soloarte');
}

//Fecha: 14/05/2023