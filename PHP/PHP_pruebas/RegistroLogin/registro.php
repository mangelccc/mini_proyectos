<?php

include "../biblioteca.php"; 

// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$contra = $_POST['contra'];
$contra2 = $_POST['contra2'];
$email = $_POST['email'];

// Carga los usuarios existentes desde el archivo JSON
$usuarios = cargarUsuarios("./usuarios.json");

// Verifica si las contraseñas coinciden
if ($contra !== $contra2) {
    echo "Error: Las contraseñas no coinciden.";
} else {

    // Agrega el nuevo usuario al array de usuarios
    $usuarios[] = [
        "name" => $nombre,
        "pass" => $contra, 
        "email" => $email
    ];

    // Guarda el array de usuarios actualizado en el archivo JSON
    guardarUsuarios($usuarios, "./usuarios.json");

    echo "<p>Usuario registrado exitosamente.</p>";
    echo '<form action="index.php" method="get">
    <input type="submit" value="Volver al Index">
  </form>';
}
?>

