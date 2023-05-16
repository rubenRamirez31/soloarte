<?php

include '../Conection/cn.php';

$id = 2;
$sql = "select imagen from imagenes where id_producto= $id";
$resul = $db->query($sql);
  $contador = 0;
while ($row = $resul->fetch_assoc()) {
  

    $imagen = $row['imagen'];
    // header("Content-Type: image/png");
    // echo $imagen;

    $contador++;
}

echo "cantidad de veces iterado =" . $contador;
