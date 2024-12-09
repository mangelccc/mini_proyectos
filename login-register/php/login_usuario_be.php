<?php

session_start();

//Conexion con la BD.
include  'conexion_be.php';// $conexion = mysqli_connect("localhost", "root","","login_register_db");

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena_encriptada = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios 
                                          WHERE correo='$correo' 
                                          AND contrasena='$contrasena_encriptada'
                             ");
if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $correo;
    header("location: ../pagina.php");
    exit;
} else {
    echo '
        <script>
            alert("Usuario no exite, intentalo de nuevo.");
             window.location = "../index.php";
        </script>
    ';
    exit;
}
?>