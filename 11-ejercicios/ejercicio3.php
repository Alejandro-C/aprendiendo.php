<!-- imprimir los cuadrados de los primeros 40 numero naturales -->

<?php 
$contador = 0;
$cuadrado = 0;

while ($contador <= 40) {
    $cuadrado = $contador * $contador;

    if ($contador != 40) {
        echo "<b>$cuadrado<b> - ";
    } else {
        echo "<b>$cuadrado<b>";
    }

    $contador++;
}
?>