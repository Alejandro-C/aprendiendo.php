<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios con PHP</title>
</head>
<body>
    <h1>Formularios</h1>

    <!--
        action: es la pajina a la cial se enviara la informacion
        method: para enviar la informacion por un metodo puede ser por POST o GET 
        enctype: permite enviar archivos del formulario al servidor

     -->
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" autofocus="autofocus" placeholder="Digita tu Nombre"><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required="required" pattern="[A-Z ]+"><br><br>

        <label for="fecha_nacimiento">Fecha Nacimiento:</label>
        <input type="date" name="fecha_nacimento"><br><br>

        <label for="cedula">Cedula:</label>
        <input type="file" name="cedula" multiple="multiple"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

?>