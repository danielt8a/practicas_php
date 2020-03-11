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
        //Evitar que el usuario pueda ingresar código
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

if(!$errores){
    $enviar_a = 'danieltelles8a@gmail.com';
    $asunto = 'Correo enviado desde mi pagina.com';
    $mensaje_preparado = "De: $nombre \n";
    $mensaje_preparado .= "Correo: $correo \n";
    $mensaje_preparado .= "Mensaje: ". $mensaje;

    //La función mail sólo funcionará en un hosting
    //mail($enviar_a, $asunto, $mensaje_preparado);
    $enviado = 'true';
}


}
    require 'index.view.php';


?>