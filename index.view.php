<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:">

            <textarea name="mensaje"  class="form-control" id="mensaje" placeholder="Mensaje"></textarea>
            
        </form>
    </div>
</body>
</html>