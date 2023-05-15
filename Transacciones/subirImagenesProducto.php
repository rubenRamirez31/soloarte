<?php

require '../Conection/cn.php';

$producid = $_POST['id'];

var_dump($producid);
exit;
$fileTmpNames = $_FILES['imagenes']['tmp_name'];

for ($i = 0; $i < count($fileTmpNames); $i++) {
    $fileTmpName = $fileTmpNames[$i];
    $imagenes = file_get_contents($fileTmpName);

    $query = "INSERT INTO imagenes (id_producto,imagen)
VALUES($producid,$imagenes)";

var_dump($query);

try {
    $db->query($query);

    
} catch (Exception $ex) {
    echo $ex ->getMessage();
}

}
