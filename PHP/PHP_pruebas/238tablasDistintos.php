<?php
$random = [];
$listaNumeros = [];

for ($i=0; $i < 6; $i++) {
    $random[$i] = [];
    echo "Array [$i]: ";
    for ($j=0; $j < 9; $j++) {
        do{
            $random[$i][$j]  = rand(1,55);
        } while (in_array($random[$i][$j] ,$listaNumeros));

        $listaNumeros[] = $random[$i][$j];

            echo $random[$i][$j];
            echo "[$j],";

    }
    echo "\n";
}



