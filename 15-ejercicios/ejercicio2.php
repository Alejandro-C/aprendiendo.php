<!-- programa que añada valores de un array mientras que su longitud sea menor que 10 luego mostrarlo por pantalla -->

<?php
$array = [];
$contador = 1;

while (count($array) < 10) {
    array_push($array,$contador);

    $contador++;
}

foreach ($array as $elememto) {
    echo "$elememto ";
}
?>