<?php
// crear una carpeta
if (!is_dir("mi_carpeta")) {
    mkdir("mi_carpeta", 0777) or die ("Nose se puede crear la carpeta");
} else {
    echo "ya existe la carpeta";
}

// borrar una carpeta
// rmdir("mi_carpeta");

echo "<hr>Contenido de la carpeta<br>";
// abrir una carpeta
if ($gestor = opendir('./mi_carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != "..") {
            echo $archivo ."<br>";
        }
    }
}
?>