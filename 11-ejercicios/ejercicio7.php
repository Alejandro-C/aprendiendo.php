<!-- programa que muestre todos los numeros impares entre dos numero que lleguen por la URL -->

<?php
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 >= $numero2) {
        echo "<b>|$numero2| </b>";

        for ($i = $numero2; $i < $numero1; $i++) {
            if ($i != $numero2 && $i % 2 != 0) {
                echo "$i ";
            }
        }

        echo "<b>|$numero1| </b>";
    } else {
        echo "<b>|$numero1| </b>";

        for ($i = $numero1; $i < $numero2; $i++) {
            if ($i != $numero1 && $i % 2 != 0) {
                echo "$i ";
            }
        }

        echo "<b>|$numero2|</b>";
    }
} else {
    echo "Los parametros no exiten";
}
?>