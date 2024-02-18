<?php
    include("ConexionDB.php");

if (!empty($_POST['registrarse']))
{
    if (empty($_POST['nombre']) && empty($_POST['apellido']) &&empty($_POST['email']) 
    &&empty($_POST['contraseña']))
    {
        echo '<div class="alerta">Campos vacios</div>';
    }
    else
    {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];

        $consultarEmail= "SELECT * FROM registro where email = '$email' ";
        $resultadoEmail = $conex->query($consultarEmail);
        if($resultadoEmail -> num_rows > 0 )
        {
            $errors[] ="";
            echo '<div class="alerta">Correo ya registrado</div>';
        }
        if(empty($errors))
        {
        $sql=$conex->query("INSERT INTO registro(nombre, apellido, email, contraseña)
        VALUES ('$nombre','$apellido','$email','$contraseña')");

        echo '<div class="Correctamente">Usuario registrado correctamente</div>';
        header("location:Login.php");
        exit;
        }

    }
}

?>