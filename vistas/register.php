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
            <form action="" method="POST">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" required>

                <label for="username">Usuario:</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="pasword" required>

                <label for="email">Correo electrónico:</label>
                <input type="text" name="email" id="email" required>

                <button type="submit">Registrarse</button>
            </form>
        </section>

    </main>

</body>

</html>