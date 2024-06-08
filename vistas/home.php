<?php
include_once '../templates/credenciales.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../templates/head.php'; ?>
</head>

<body>

    <header>
        <a class="titulo" href="../index.php">Página de prueba</a>

        <div class="botones">
            <a href="../templates/logout.php">Cerrar sesión</a>
        </div>

    </header>

    <main>

        <h1>Bienvenido <?php echo $_SESSION['login_user']; ?>!</h1>

    </main>
</body>

</html>