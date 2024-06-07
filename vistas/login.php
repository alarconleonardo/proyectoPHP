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
            <form action="" method="POST">
                <label for="username">Usuario:</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="pasword" required>

                <button type="submit">Iniciar sesión</button>
            </form>
        </section>

    </main>

</body>

</html>