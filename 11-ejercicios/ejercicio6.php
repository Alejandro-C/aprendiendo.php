<!-- imprimir una tabla de HTML con las tablas de multiplicar del 1 al 10 -->

<?php
echo "<table border='1'><tr>"; //inicio de la tabla

echo "<tr>"; //inicio fila 1 de celdas
for ($i = 1; $i <= 10; $i++) { //cabecera
    echo "<td> Tabla del $i";
    echo "</td>";
}
echo "</tr>"; //fin fila 1 de celdas

echo "<tr>"; //inicio fila 2 de celdas
for ($j = 1; $j <= 10; $j++) {
    echo "<td>";

    for ($x = 1; $x <= 10; $x++) {
        echo "$j x $x = " .($j * $x) ."<br>";
    }
    
    echo "</td>";
}
echo "</tr>"; //fin fila 2 de celdas

echo "</table>"; //fin de la tabla
?>