<?php
include_once 'connection.php';
session_start();

//Recoger datos del formulario
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
$correo = $_POST['correo'];

//Protege contra inyecciones SQL
$nombre = mysqli_real_escape_string($conn, $nombre);
$usuario = mysqli_real_escape_string($conn, $usuario);
$contraseña = mysqli_real_escape_string($conn, $contraseña);
$correo = mysqli_real_escape_string($conn, $correo);

//Preparar la consulta SQL
$sql = "INSERT INTO usuario (nombre, usuario, contraseña, correo) VALUES ('$nombre', '$usuario', '$contraseña', '$correo')";

if ($conn->query($sql) === true) {
    echo "Registro exitoso";
} else {
    echo "Error: El nombre de usuario ya existe.";
}

$conn->close();
