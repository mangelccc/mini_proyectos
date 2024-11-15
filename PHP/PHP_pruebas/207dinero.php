<?php
$dinero = 243;

$billetes = [100,50,20,10,5,2,1];

foreach ($billetes as $billete) {
    $total = intdiv($dinero, $billete);
    $sobrante = $dinero % $billete;
    $dinero = $sobrante;
    echo "$total billete de $billete\n";
}
