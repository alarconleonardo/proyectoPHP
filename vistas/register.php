<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../templates/head.php'; ?>
</head>

<body>

    <header>
        <a class="titulo" href="../index.php">Página de prueba</a>

        <div class="botones">
            <a href="/vistas/login.php">Iniciar sesión</a>
        </div>

    </header>

    <main>

        <section class="formulario">
            <h1>Registrarse</h1>
            <form action="../templates/registro.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>

                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" required>

                <label for="correo">Correo electrónico:</label>
                <input type="email" name="correo" id="correo" required>

                <button type="submit">Registrarse</button>
            </form>
        </section>

    </main>

</body>

</html>