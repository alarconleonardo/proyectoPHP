<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../templates/head.php'; ?>
</head>

<body>

    <header>
        <a class="titulo" href="../index.php">Página de prueba</a>

        <div class="botones">
            <a href="/vistas/register.php">Registrarse</a>
        </div>

    </header>

    <main>

        <section class="formulario">
            <h1>Iniciar sesión</h1>
            <form action="../templates/login.php" method="POST">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" required>

                <button type="submit">Iniciar sesión</button>
            </form>
        </section>

    </main>

</body>

</html>