<?php
//Conexion con la BD.
include  'conexion_be.php';// $conexion = mysqli_connect("localhost", "root","","login_register_db");

// Variables name del index.
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena_encriptada = hash('sha512', $contrasena);

// Crear una query que es intertar los datos de la tabla registo en nuestra tabla (usuarios) creada en la Base de Datos.
$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
          VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena_encriptada')";

//Verificar que el correo electronico no se repita en la Base de Datos.

$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente.");
             window.location = "../index.php";
        </script>
    ';
    exit();
}

//Verificar que el usuario no se repita en la Base de Datos.

$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya esta registrado, intenta con otro diferente.");
             window.location = "../index.php";
        </script>
    ';
    exit();
}
//---------------------------------------------------------------------------------------------
// Ejecutar query.            abrimos  metemos
    $ejecutar = mysqli_query($conexion, $query);

    //Este codigo esta bien pero paraq ue funcion en el index hay que poner:
                        
    //<form action="php/registro_usuario_be.php" method="POST" class="formulario__register">

    //Me canse de documentar.

    if ($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado correctamente");
                window.location = "../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error: Usuario no almacenado.");
                window.location = "../index.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>