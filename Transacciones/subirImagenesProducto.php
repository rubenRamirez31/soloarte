<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../Conection/cn.php';

    $producid = $_POST['id'];

    $fileTmpNames = $_FILES['imagenes']['tmp_name'];

    for ($i = 0; $i < count($fileTmpNames); $i++) {
        $fileTmpName = $fileTmpNames[$i];
        $imagenes = file_get_contents($fileTmpName);

        $sql = "insert into imagenes (id_producto,imagen) values (?,?)";
        $cmd = $db->prepare($sql);
        $res = $cmd->execute([$producid, $imagenes]);
    }

    header('Location: /soloarte/Paginas/Admin/index.php?resul=4');
} else {
    header('Location: /soloarte');
}
