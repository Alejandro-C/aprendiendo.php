<!-- hacer una interfas de usuario (formulario) con 2 inputs y 4 botones (sumar, restar, multiplicar, dividir) -->

<?php
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $resultado = false;

    if (isset($_POST['sumar'])) {
        $resultado = "EL resultado es: " .($_POST['numero1'] + $_POST['nuemro2']);
    }

    if (isset($_POST['retar'])) {
        $resultado = "EL resultado es: " .($_POST['numero1'] - $_POST['nuemro2']);
    }

    if (isset($_POST['multiplicar'])) {
        $resultado = "EL resultado es: " .($_POST['numero1'] * $_POST['nuemro2']);
    }

    if (isset($_POST['dividir'])) {
        $resultado = "EL resultado es: " .($_POST['numero1'] / $_POST['nuemro2']);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>

    <form action="" method="POST">
        <label for="numero1">Numero 1:</label><br>
        <input type="number" name="numero1"><br>
        <label for="numero2">Numero 2:</label><br>
        <input type="number" name="numero2"><br><br>

        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">
    </form>

    <?php
        if ($resultado != false) :
            echo "<h2> $resultado </h2>";
        endif;
    ?>
</body>
</html>