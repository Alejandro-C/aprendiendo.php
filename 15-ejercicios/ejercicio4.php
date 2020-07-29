<!-- crear un script que tenga 4 variables (array, string, int, boolean) e imprimir el tipo de dato -->

<?php

use function PHPSTORM_META\type;

$array = [2];
$string = 'lola';
$numero = 0;
$boolean = true;

if (is_array($array)) {
    echo "array <br>";
}

if (is_string($string)) {
    echo "string <br>";
}

if (is_integer($numero)) {
    echo "int <br>";
}

if (is_bool($boolean)) {
    echo "boobleano";
}
?>