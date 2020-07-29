<!-- recoger dos numero recojidos por URL(GET) y hacer todas las operaciona bacicas de una calculadora de esos dos numeros-->

<?php
//verificando si hay numeros
//para poner numero en la URL se le agrega en ella "?variable1=valor1&variable2=valor2"
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "Suma: " .($numero1 + $numero2) ."<br>";
    echo "Resta: " .($numero1 - $numero2) ."<br>";
    echo "Producto: " .($numero1 * $numero2) ."<br>";

    if ($numero2 == 0) {
        echo "No se puede dividir entre 0";
    } else {
        echo "Divicion: " .($numero1 / $numero2);
    }
} else {
    echo "Introduce los valores corectamente los valores por la URL";
}
?>
