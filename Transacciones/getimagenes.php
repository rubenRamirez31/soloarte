<?php
//Obtener imagen de usuario


//Autor: Geovanni Alarcon Perez

//Este arhivo sierve para extraer la imagen del usuario de la base de datos

//Proteger la pagina
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  //incluir la conexion a la base de datos
  include '../Conection/cn.php';

  //obtener la imagen del usuario 
  $id = $_GET['id'];
  $sql = "select imagen from imagenes where id_producto = $id LIMIT 1";
  $resul = $db->query($sql);

  $row = $resul->fetch_assoc();
  $imagen = $row["imagen"];
  header("Content-Type: image/png/jpg");
  echo $imagen;
} else {
  header('Location: /soloarte');
}
