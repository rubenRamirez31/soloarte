<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['rol']);
unset($_SESSION['login']);
unset($_SESSION['nombre']);
header("Location: /soloarte/Paginas/login.php");
die();

?>