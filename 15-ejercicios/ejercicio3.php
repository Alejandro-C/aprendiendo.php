<!-- programa que comprueve si una variable esta vacia y si lo esta llernarna con texto  y mostralo en mayusculas y negrita-->

<?php
$texto = "";

if (empty($texto)){
    $texto = "estoy llenito";

    $mayuscula = strtoupper($texto);

    echo "<b>$mayuscula</b>";
}
?>