<?php

include '../Conection/cn.php';

$datos = array();
$id = 2;
$sql = "SELECT imagen FROM imagenes WHERE id_producto= $id";
$resul = $db->query($sql);

while ($row = $resul->fetch_assoc()) {
  $datos[] = $row['imagen'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php for ($i = 0; $i < 3; $i++) : ?>

    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($datos[$i]) . '" alt="Imagen del producto">'; ?>

  <?php endfor ?>

</body>

</html>