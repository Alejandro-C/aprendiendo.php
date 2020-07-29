<?php
if (isset($_COOKIE['miCookie'])) {
    unset($_COOKIE['miCookie']);

    // para eliminar una cookie hay que caducarla
    setcookie('miCookie', '', time()-100);
}

if (isset($_COOKIE['unYear'])) {
    unset($_COOKIE['unYear']);

    // para eliminar una cookie hay que caducarla
    setcookie('unYear', '', time()-100);
}

// redireccionando
header('location:ver-cookies.php');
?>