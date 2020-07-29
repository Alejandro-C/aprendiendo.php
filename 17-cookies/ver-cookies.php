<?php
// ver cookie
if (isset($_COOKIE['miCookie'])) {
    echo "<b>". $_COOKIE['miCookie'] ."</b><br>";
} else {
    echo "No existe la cookie miCookie<br>";
}

if (isset($_COOKIE['unYear'])) {
    echo "<b>". $_COOKIE['unYear'] ."</b><br>";
} else {
    echo "No existe la cookie un Year<br>";
}
?>

<br>
<a href="borrar-cookies.php">Borrar galletas</a><br>
<a href="crear-cookie.php">Crear galletas</a>