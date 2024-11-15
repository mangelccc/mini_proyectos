<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio Sesion</title>
</head>
<body>

    <h1>Iniciar Sesion</h1>
        <form action="login.php" method="POST">
            <label for="name">Nombre </label>
            <input type="text" name="nombrel" required><br>
            <label for="pass">Contra</label>
            <input type="password" name="contral" required><br>
            <button type="submit">Iniciar</button>
        </form>

    <h1>Registro</h1>
        <form action="registro.php" method="POST">
            <label for="name">Nombre </label>
            <input type="text" name="nombre" required><br>
            <label for="pass">Contras</label>
            <input type="password" name="contra" required><br>
            <label for="pass2">Repetir contra</label>
            <input type="password" name="contra2" required><br>
            <label for="email">email</label>
            <input type="text" name="email" required><br>
            <button type="submit">Registrar</button>
        </form>
</body>
</html>
