<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Formlarios</title>
</head>
<body>
    <h1>validar formularios en php</h1>

    <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];

            if ($error == 'faltan_valores') {
                echo "<strong style='color:red'>Introduce todos los datos en los campos del formulario</strong>";
            }

            if ($error == 'nombre') {
                echo "<strong style='color:red'>Introduce bien el campo 'Nombre'</strong>";
            }

            if ($error == 'apellidos') {
                echo "<strong style='color:red'>Introduce bien el campo 'Apellidos'</strong>";
            }

            if ($error == 'edad') {
                echo "<strong style='color:red'>Introduce bien el campo 'Edad'</strong>";
            }

            if ($error == 'email') {
                echo "<strong style='color:red'>E-mail invalido</strong>";
            }

            if ($error == 'pass') {
                echo "<strong style='color:red'>Introduce una contraseña con minimo 5 caracteres</strong>";
            }
        }
    ?>

    <form method="POST" action="procesar-formulario.php">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+" autofocus="autofocus"><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"><br><br>

        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" required="required"><br><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" name="pass" required="required" minlength="5"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>