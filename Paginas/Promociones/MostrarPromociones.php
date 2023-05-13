<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header("Location: NoAutenticado.php");


    }

    if ($_SESSION['idUsuRol'] != 1) {

        header("Location: NoAutorizado.php");

    }
       
 ?>