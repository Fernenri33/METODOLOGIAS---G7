<?php
include("ConexionDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    if(empty($_POST['email'])) 
    {
        echo '<div class="alerta">Campo de Email vacio</div>';
    }
    else if(empty($_POST['contraseña']))
    {
        echo '<div class="alerta">Campos de Contraseña vacio</div>';
    }
    else
    {
        
    $consulta = "SELECT * FROM registro WHERE email = '$email' AND contraseña = '$contraseña'";
    $resultado = $conex->query($consulta);

    if ($resultado->num_rows == 1) {
        $_SESSION["email"] = $email;
        header("Location: Homepage.html");
        exit;
    } else {
        header("Location: Login.php");
        exit;
    }
    }
}

?>