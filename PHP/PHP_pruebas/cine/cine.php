<?php
include "../biblioteca.php"; 

$sala = [];
$cliente = jsonToArray("./clientes.json");

// Llenar la matriz
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $sala[$i][$j] = "[F:$i|C:$j]"; 
    }
}

print_r($cliente);



$f=5; //i
$c=5; //j

$tickets=0;
$acumulador = 1;
$totalTickets = $_POST['tickets'];

    //primero 
    if ($totalTickets == 1){
        $sala[$f][$c] = "[Ocup.]";
            $cliente["tickets"][] = [
                "Fila" => $f,
                "Columna" => $c
                ];

        $tickets++;
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
while ($tickets <$totalTickets){
    //Derecha
    for ($i =  0; $i<$acumulador && $tickets < $totalTickets;$i++){
        $sala[$f][$c++] = "[Ocup.]";
        $cliente["tickets"][] = [
            "Fila" => $f,
            "Columna" => $c
        ];
        $tickets++;
    }
    // 1ª
        //$sala[5][6] = "[Ocup.]";// j++
    // 2º
        //$sala[4][5] = "[Ocup.]";//j++
        //$sala[4][6] = "[Ocup.]";//j++
        //$sala[4][7] = "[Ocup.]";//j++
    // 3º
        //$sala[3][4] = "[Ocup.]";//j++
        //$sala[3][5] = "[Ocup.]";//j++
        //$sala[3][6] = "[Ocup.]";//j++
        //$sala[3][7] = "[Ocup.]";//j++
        //$sala[3][8] = "[Ocup.]";//j++
        //$sala[3][8] = "[Ocup.]";//j++
    //Abajo
    for ($i = 0; $i<$acumulador && $tickets < $totalTickets;$i++){
        $sala[$f++][$c] = "[Ocup.]";
        $cliente["tickets"][] = [
            "Fila" => $f,
            "Columna" => $c
        ];
        $tickets++;
    }
    $acumulador++;
    // 1ª
        //$sala[6][6] = "[Ocup.]";//i++
    // 2º
        //$sala[5][7] = "[Ocup.]";//i++
        //$sala[6][7] = "[Ocup.]";//i++
        //$sala[7][7] = "[Ocup.]";//i++
    // 3º
        //$sala[4][8] = "[Ocup.]";//i++
        //$sala[5][8] = "[Ocup.]";//i++
        //$sala[6][8] = "[Ocup.]";//i++
        //$sala[7][8] = "[Ocup.]";//i++
        //$sala[8][8] = "[Ocup.]";//i++
    //IZQUIERDA
    for ($i = 0; $i<$acumulador && $tickets < $totalTickets;$i++){
        $sala[$f][$c--] = "[Ocup.]";
        $cliente["tickets"][] = [
            "Fila" => $f,
            "Columna" => $c
        ];
        $tickets++;
    }         
    // 1ª
        //$sala[6][5] = "[Ocup.]";//j--
        //$sala[6][4] = "[Ocup.]";//j--
    // 2º
        //$sala[7][6] = "[Ocup.]";//j--
        //$sala[7][5] = "[Ocup.]";//j--
        //$sala[7][4] = "[Ocup.]";//j--
        //$sala[7][3] = "[Ocup.]";//j--
    // 3º
        //$sala[8][7] = "[Ocup.]";//j--
        //$sala[8][6] = "[Ocup.]";//j--
        //$sala[8][5] = "[Ocup.]";//j--
        //$sala[8][4] = "[Ocup.]";//j--
        //$sala[8][3] = "[Ocup.]";//j--
        //$sala[8][2] = "[Ocup.]";//j--
    //ARRIBA
    for ($i = 0; $i<$acumulador && $tickets < $totalTickets;$i++){
        $sala[$f--][$c] = "[Ocup.]";
        $cliente["tickets"][] = [
            "Fila" => $f,
            "Columna" => $c
        ];
        $tickets++;
    }
    $acumulador++;
    // 1ª
        //$sala[5][4] = "[Ocup.]";//i--
        //$sala[4][4] = "[Ocup.]";//i-- 
    // 2º
        //$sala[6][3] = "[Ocup.]";//i--
        //$sala[5][3] = "[Ocup.]";//i--
        //$sala[4][3] = "[Ocup.]";//i--
        //$sala[3][3] = "[Ocup.]";//i--
    // 3º
        //$sala[7][2] = "[Ocup.]";//i--
        //$sala[6][2] = "[Ocup.]";//i--
        //$sala[5][2] = "[Ocup.]";//i--
        //$sala[4][2] = "[Ocup.]";//i--
        //$sala[3][2] = "[Ocup.]";//i--
        //$sala[2][2] = "[Ocup.]";//i--
}
guardarUsuarios($cliente, "./clientes.json");
// Imprimir la matriz completa
echo "<table border='1'>";
for ($i = 0; $i < 12; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 12; $j++) {
        echo "<td>".$sala[$i][$j]."</td>";
    }
    echo "</tr>"; // Cambiar de <tr> a </tr>
}
echo "</table>";
?>