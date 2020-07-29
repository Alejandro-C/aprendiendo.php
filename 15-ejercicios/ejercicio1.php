<!-- 
crear un programa que tenga un array de 8 numero enteros y que haga lo siguiente:
1.recorrerlo y mostrarlo
2.ordernarlo y mostrarlo
3,mostrar su longitud
4,buscar algun elemento 
-->

<?php
$numeros = [5,4,3,2,1];
$vocales = ['u','o','i','e','a'];


// Recorrerlo y mostrarlo
echo "<b>Numeros: </b>";
foreach($numeros as $numero) {
    echo "$numero ";
}

echo "<br><b>Vocales: </b>";
foreach ($vocales as $vocal) {
    echo "$vocal ";
}

echo "<hr>";

//Ordenarlo y mostrarlo
sort($numeros);
sort($vocales);

echo "<b>Numeros Ordenados: </b>";
foreach($numeros as $numero) {
    echo "$numero ";
}

echo "<br><b>Vocales Ordenadas: </b>";
foreach ($vocales as $vocal) {
    echo "$vocal ";
}

echo "<hr>";

// Mostrar la longitud
$elementosNumeros = count($numeros);
$elementosVocales = count($vocales);

echo "<b>Numero de elementos en Numeros:</b> $elementosNumeros <br>";
echo "<b>Numero de elementos en Vocales:</b> $elementosVocales";

echo "<hr>";

// Buscar un elemento 
$buscarNumero = array_search(3,$numeros);
$buscarVocal = array_search('o',$vocales);

echo "el numero '3' esta en la posición: $buscarNumero<br>";
echo "la vocal 'o' esta en la posición: $buscarVocal";
?>