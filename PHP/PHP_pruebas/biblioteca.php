<?php
// Función para guardar usuarios en el archivo JSON
function guardarUsuarios($usuarios, $archivo) {
    file_put_contents($archivo, json_encode($usuarios, JSON_PRETTY_PRINT)); // Guarda el array como JSON
}
// Función para cargar usuarios desde el archivo JSON
function cargarUsuarios($archivo) {
    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        return json_decode($contenido, true) ?? []; // Devuelve un array o un array vacío
    }
    return []; // Devuelve un array vacío si el archivo no existe
}

function jsonToArray($archivo) {
    // Lee el contenido del archivo y convierte el JSON a un array
    return json_decode(file_get_contents($archivo), true);
}

function generarTabla($filas, $columnas) {



    echo "<table border='1'>";
    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columnas; $j++) {
            echo "<td>[F:$i|C:$j]</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>