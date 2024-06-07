<!--incluir los imports generales aqui-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>

<?php

$pagina = basename($_SERVER['PHP_SELF']);
switch ($pagina) {
    case "index.php":
?>
        <title>Página index</title>
        <link rel="stylesheet" href="/vistas/css/plantilla-header.css">
        <link rel="stylesheet" href="/vistas/css/style-index.css">
    <?php
        break;

    case "login.php":
    ?>
        <title>Iniciar sesión</title>
        <link rel="stylesheet" href="/vistas/css/plantilla-header.css">
        <link rel="stylesheet" href="/vistas/css/style-login-register.css">
    <?php

    case "register.php":
    ?>
        <title>Registrarse</title>
        <link rel="stylesheet" href="/vistas/css/plantilla-header.css">
        <link rel="stylesheet" href="/vistas/css/style-login-register.css">
<?php
}

?>