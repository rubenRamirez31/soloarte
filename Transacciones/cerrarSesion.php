<?php
session_start();

if (isset($_SESSION)) {
    
    unset($_SESSION['usuario']);
    unset($_SESSION['rol']);
    unset($_SESSION['nombre']);
    header("Location:/soloarte");
    die();
} else {
    header('Location: /soloarte');
}
