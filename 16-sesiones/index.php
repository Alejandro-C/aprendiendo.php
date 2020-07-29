<!-- Una sesion almacena y guarda dats del usuarios mientras navega hasta que 
cierra la sesion o cierra el navegador -->

<?php
// iniciar sesion
session_start();

// variable local
$variable_normal = "Soy una cadena de texto";

// variable de sesion
$_SESSION['variable_persistente'] = "Soy una sesion activa";

echo $variable_normal ."<br>";
echo $_SESSION[ 'variable_persistente'];
?>