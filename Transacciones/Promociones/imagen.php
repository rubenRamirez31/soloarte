<?php

require '../Conection/cn.php';


$fileTmpNames = $_FILES['imagen']['tmp_name'];

for ($i = 0; $i < count($fileTmpNames); $i++) {
    $fileTmpName = $fileTmpNames[$i];
    $imagenes = file_get_contents($fileTmpName);

    $query = "INSERT INTO promociones (imagen)
VALUES($Imagen)";


try {
    $db->query($query);

    
} catch (Exception $ex) {
    echo $ex ->getMessage();
}

}
