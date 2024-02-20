<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Login.css">
</head>
<body>
    

<header class="header">
</header>

    <main class="Principal">

        <form method="post" autocomplete="off">

        <div class="Contexto"> <h2>Iniciar Sesión</h2> </div>

        <?php
        include("FuncionLogin.php");
        ?>

            <div class="Contenedor">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="Contenedor">
                <input type="password" name="contraseña" placeholder="Contraseña">
            </div>

            <input class="Boton" type="submit" name="login" value="Iniciar Sesión">

            <div class="Contenedor2">
                <p class="linkLogin">¿No tienes una cuenta?<a href="Index.php">Registrarse</a></p>
            </div>
        </form>

    </main>

    
    <footer>
        <p>Copyright © 2024 CarWap</p>
    </footer>


</body>
</html>