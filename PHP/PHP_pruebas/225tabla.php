<?php

if (!isset($_POST['files']) || !isset($_POST['columnas'])) {
    echo "Los datos no se han recibido de forma correcta para crear la tabla";
}



$filas=$_POST['files'];
$columnas=$_POST['columnas'];

echo "<table border='1'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>($i,$j)</td>";
    }
    echo "</tr>";
}
echo "</table>";//eee
