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

        <div class="Contexto">
            <h2>Registrarse</h2>
        </div>

        <form method="post" autocomplete="off">

            <?php
        include("FuncionRegistro.php");
        ?>

            <div class="Contenedor1">
                <input type="text" name="nombre" placeholder="Nombre">
            </div>

            <div class="Contenedor2">
                <input type="text" name="apellido" placeholder="Apellido">
            </div>

            <div class="Contenedor3">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="Contenedor4">
                <input type="password" name="contraseña" placeholder="Contraseña">
            </div>

            <input class="Boton" type="submit" name="registrarse">

        </form>

    </main>

    <footer>
        <p>Copyright © 2024 Empresa de Venta de Vehículos</p>
    </footer>

</body>

</html>