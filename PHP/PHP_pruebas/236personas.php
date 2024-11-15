<?php

$personas = [
    ['nombre' => 'Juan', 'altura' => 182, 'email' => 'juan@gmail.com'],
    ['nombre' => 'Aitor', 'altura' => 175, 'email' => 'aitor@gmail.com'],
    ['nombre' => 'Conrrado', 'altura' => 168, 'email' => 'conrrado@gmail.com'],
    ['nombre' => 'Ivan', 'altura' => 188, 'email' => 'ivan@gmail.com'],
    ['nombre' => 'carlos', 'altura' => 192, 'email' => 'carlos@gmail.com']
];
$contador = 1;
foreach ($personas as $persona) {
    echo "Persona $contador\n";

    foreach ($persona as $datos => $dato) {
        echo "$datos: $dato\n";
    }
    echo "\n";
    $contador++;
}

/*
$persona["nombre"] = "Bruce Wayne";
$persona["telefonos"] = ["966 123 456", "636 636 636"]; // array de arrays ordinarios
$persona["profesion"] = ["dia" => "filántropo", "noche" => "caballero oscuro"]; // array de arrays asociativos

echo $persona['nombre']." por la noche trabaja de ".$persona['profesion']['noche'];
*/