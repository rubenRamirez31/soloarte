<?php

session_start();


    include("../../Conection/cn.php");
    $nombreCreador = $_POST['nombreCreador'];
    $apePCreador = $_POST['apellidoCreadorP'];
    $apeMCreador = $_POST['apellidoCreadorM'];
    $edadCreador = $_POST['edadCreador'];
    $descripcionCreador = $_POST['descripcionCreador'];

    $nombre = $_FILES['fotoCreador']['name'];
    $directorio = $_FILES['fotoCreador']['tmp_name'];
    $tamanio = $_FILES['fotoCreador']['size'];

    $imagen = file_get_contents($directorio);

    $sql = "insert into Creadores (nombre,app,apm,edad,descripcion,imagen)                           
                                    values(?,?,?,?,?,?)";
    $cmd = $db->prepare($sql);
    $res = $cmd->execute([$nombreCreador,$apePCreador,$apeMCreador,$edadCreador,$descripcionCreador,$imagen]);


    header("Location: ../Paginas/Creadores/MostrarCreadores.php");

    ?>
    