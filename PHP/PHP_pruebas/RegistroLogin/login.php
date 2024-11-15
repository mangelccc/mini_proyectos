<?php
$nombre = $_POST['nombrel'];
$contra = $_POST['contral'];

include "../biblioteca.php"; 

$objeto = "./usuarios.json";

if (!isset($nombre) || !isset($contra)){
    echo "¿Bro eres tonto?";
}else{
    $usuarios = jsonToArray($objeto);

    $nameCorrect = false;
    $passCorrect = false;

    foreach($usuarios as $usuario){
        if ($usuario["name"] == $nombre){
            $nameCorrect = true;
            if ($usuario["pass"] == $contra) {
                $passCorrect = true;
                break;
            }
        }
    }
}

if ($nameCorrect && $passCorrect){
    header("Location: ../cine/index.php");
    guardarUsuarios($usuario, "../cine/clientes.json");
}else if (!$nameCorrect) {
    echo "Usuario Incorrecto";
}else {
    echo "Contraseña Incorrecta";
}
?>
