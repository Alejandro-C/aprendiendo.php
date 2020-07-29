<!-- es un fichero que se almacena en el ordenador del usuarios que visita la web con el fin de recordar datos con el fin de recordar o rastrear comportamientos del mismo -->

<?php
// crear COOKIE
setcookie('miCookie', 'Valor de mi galleta');

// cookie con fecha de vencimineto (se elimina en cierto tiempo)
setcookie('unYear', 'Valor de mi cookie de 365 dias', time()+(60*60*24*365));
?>

<a href="ver-cookies.php">ver las galletas</a>