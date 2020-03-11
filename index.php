<?php

$errores = '';
$enviado = '';


// Validar que el usuario ha enviado datos
if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    //Validación del nombre
    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre. <br>';
    }

    //Validación del correo
    if(!empty($correo)) {
            //$correo = trim($correo);
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores .= 'Por favor ingresa un correo válido <br>';
            }
    }else {
        $errores .= 'Por favor ingresa un correo. <br>';
    }

    //Validar mensajes
    if(!empty($mensaje)) {
        //$correo = trim($correo);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
        $mensaje = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Por favor ingresa un correo válido <br>';
        }
}else {
    $errores .= 'Por favor ingresa un mensaje. <br>';
}


}
    require 'index.view.php';


?>