<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../CSS/Index.css">
</head>

<body>

    <header>
    </header>

    <main class="Principal">

        <form method="post" autocomplete="off">

            <div class="Contexto">
                <h2>Crear cuenta</h2>
            </div>

            <?php
                include("FuncionRegistro.php");
            ?>

            <div class="Contenedor">
                <input class="input" type="text" name="nombre" placeholder="Nombre">
            </div>

            <div class="Contenedor">
                <input class="input" type="text" name="apellido" placeholder="Apellido">

            </div>

            <div class="Contenedor">
                <input class="input" type="email" name="email" placeholder="Email">
            </div>

            <div class="Contenedor">
                <input class="input" type="password" name="contraseña" placeholder="Contraseña">
            </div>

            <input class="Boton" type="submit" name="registrarse" value="Registrarse">

            <div class="Contenedor2">
                <p class="linkLogin">¿Ya tienes una cuenta?<a href="Login.php">Iniciar Sesion</a></p>
            </div>

        </form>

    </main>

    <footer>
        <p>Copyright © 2024 CarWap</p>
    </footer>

</body>

</html>