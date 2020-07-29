<!-- 
crear un array con el contenido de la tabla

ACCION  AVENTURA    DEPORTES
gta     assasing    fifa
cod     crash       pes
pobg    principe    MOTO

cada columna debe ir en un fichero separado
-->

<?php
$tabla = array(
    'COLORES' => array ('Amarillo', 'Azul', 'Rojo'),
    'FRUTAS' => array ('Manzana', 'Pera', 'Sandia'),
    'MASCOTAS' => array ('Perro', 'Gato', 'Pollo')
);

$categorias = array_keys($tabla);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php foreach($categorias as $categoria) : ?>
                <th>
                    <?php $categoria ?>
                </th>
            <?php endforeach; ?>
        </tr>

        <tr>
            <td>
                <?php $tabla['COLORES'] [0] ?>
            </td>

            <td>
                <?php $tabla['FRUTAS'] [0] ?>
            </td>

            <td>
                <?php $tabla['MASCOTAS'] [0] ?>
            </td>
        </tr>
    </table>
</body>
</html>