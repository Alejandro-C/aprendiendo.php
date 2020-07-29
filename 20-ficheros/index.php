<?php
// abrir un archivo
// $archivo = fopen("fichero-texto.txt", "a+");

// leer contenido del archivo
// while (!feof($archivo)) {
//     $contenido = fgets($archivo);

//     echo $contenido ."<br>";
// }

// escribir en un archivo
// fwrite($archivo, "<br>bien. Soy un texto digitado desde php");

// cerrar un archivo
// fclose($archivo);

// copiar un fichero
// copy("fichero-texto.txt", "fichero-copiado.txt") or die("Error al copiar");

// renombrar un fichero {
// rename("fichero-copiado.txt", "archivo-recopiado.txt");

// eliminar un fichero
// unlink('archivo-recopiado.txt') or die("error al eliminar");

// combrobar que un fichero existe
if (file_exists("fichero-texto.txt")){
    echo "El archivo existe";
} else {
    echo "El archivo no existe";
}
?>