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

    <div class="Contexto"> <h2>Login</h2> </div>
    
        <form method="post" autocomplete="off">

        <?php
        include("FuncionLogin.php");
        ?>

            <div class="Contenedor1">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="Contenedor2">
                <input type="password" name="contraseña" placeholder="Contraseña">
            </div>

            <input class="Boton" type="submit" name="login">
        </form>

    </main>

    
    <footer>
        <p>Copyright © 2024 Empresa de Venta de Vehículos</p>
    </footer>


</body>
</html>