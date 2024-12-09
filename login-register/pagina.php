<?php
    session_start();

    if(!isset($_SESSION['usuario'])){ // Si no existe la sesion
        echo '
            <script>
                alert("Por favor debes inicias sesion.");
                window.location ="index.php";
            </script>
        ';
        //header("location: index.php");
        session_destroy(); // Destruye la sesion
        die(); // no ejecutes el codigo

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
    <meta name="description" content="Página de inicio de ejemplo" />
    <title>Mi Página de Inicio</title>
    <link rel="stylesheet" href="assets/css/estilos_pagina.css">
</head>
<body>
  <h1>Bienvenido</h1>
  <a href="php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>
