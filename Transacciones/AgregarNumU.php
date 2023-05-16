<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../Conection/cn.php';

    $idusuario = $_POST['id'];
    $num = $_POST['telefono'];

    $query = "UPDATE usuarios SET telefono = $num WHERE id_usuario = $idusuario";

    if ($db->query($query)) {
        header('Location:/soloarte/Paginas/Usuario/PerfilUsuario.php?resul=1');
    }
} else {
    header('Location: /soloarte');
}
