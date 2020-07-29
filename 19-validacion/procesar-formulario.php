<?php
$error = 'faltan_valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!is_string($nombre) || preg_match("/[0-9 ]+/", $nombre)) {
        $error = "nombre";
    }

    if (!is_string($apellidos) || preg_match("/[0-9 ]+/", $apellidos)) {
        $error = "apellidos";
    }

    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = "edad";
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "email";
    }

    if (empty($pass) || strlen($pass) < 5) {
        $error = "pass";
    }
} else {
    $error = 'faltan_valores';
}

if ($error != 'ok') {
    header("location:index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Formularios</title>
</head>
<body>
    <h1>Datos Ingresados</h1>

    <span>Nombre: <?= $nombre ?></span><br>
    <span>Apellidos: <?= $apellidos ?></span><br>
    <span>Edad: <?= $edad ?></span><br>
    <span>E-mail: <?= $email ?></span>
</body>
</html>