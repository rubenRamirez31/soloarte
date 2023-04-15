<?php

require '../Conection/cn.php';

//aqui pillas lo que venga de post que enviaste en el formulario

//Crear email y password
$email = $db->real_escape_string("aqui va el email del formulario");
$password = $db->real_escape_string("aqui va el password del formulario");

//funcion para hashear las contraseñas 
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Query para crear el usuario
$query = "INSERT INTO usuarios (email,password) VALUES ('$email','$passwordHash')";

//agregarlo a la base de datos
if ($db->query($query)) {
    header('Location: /Paginas/login.php?resul=1');
} else {
    header('Location: /Paginas/login.php?resul=2');
}
