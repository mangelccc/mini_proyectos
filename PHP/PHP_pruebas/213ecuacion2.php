<?php
$a = 5;
$b = 3;
$c = 2;

$raiz=pow($b,2) -4 * $a * $c;
if ($raiz < 0) {
    echo "No hay solución.";
}else{
    $p_ecuacion_2gr = -$b + sqrt($raiz) / (2 * $a);
    $n_ecuacion_2gr = -$b - sqrt($raiz) / (2 * $a);
}
    echo "$p_ecuacion_2gr";
    echo "$n_ecuacion_2gr";