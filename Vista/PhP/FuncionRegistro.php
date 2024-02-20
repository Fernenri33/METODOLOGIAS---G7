<?php
    include("ConexionDB.php");

if (!empty($_POST['registrarse']))
{
    if (empty($_POST['nombre']))
    {
        echo '<div class="alerta">Campo de Nombre vacio</div>';
    } 
    else if(empty($_POST['apellido']))
    {
        echo '<div class="alerta">Campo de Apellido vacio</div>';
    } 
    else if(empty($_POST['email']))
    {
        echo '<div class="alerta">Campo de Email vacio</div>';
    } 
    else if(empty($_POST['contraseña']))
    {
        echo '<div class="alerta">Campo de Contraseña vacio</div>';
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
        exit;
        }
    }
}
?>