<?php
session_start();

if (!isset($_SESSION["login_user"])) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("location: ../vistas/login.php");
    exit();
}