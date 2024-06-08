<?php
include_once 'connection.php';
session_start();

//Recoger datos del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

//Protege contra inyecciones SQL
$usuario = mysqli_real_escape_string($conn, $usuario);

//Preparar la consulta SQL para obtener la contraseña cifrada
$sql = "SELECT id, contraseña FROM usuario WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Se encontró el usuario, ahora comparar la contraseña
    $row = $result->fetch_assoc();
    $hashed_password = $row['contraseña'];

    // Verificar la contraseña
    if (password_verify($contraseña, $hashed_password)) {
        // Contraseña correcta, iniciar sesión
        $_SESSION['login_user'] = $usuario;
        header("location: ../vistas/home.php");
    } else {
        // Contraseña incorrecta
        $mensaje = "Contraseña incorrecta.";
        echo "$mensaje";
    }
} else {
    // No se encontró el usuario
    $mensaje = "Usuario incorrecto o inexistente.";
    echo "$mensaje";
}

$conn->close();
