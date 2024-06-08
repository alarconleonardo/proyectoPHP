<?php
session_start();
if (session_destroy()) { // Destruye todas las variables de sesión
    header("location: ../index.php");
    exit();
}
