<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Compra de Entradas</title>
</head>
<body>

    <h1>Entradas</h1>
        <form action="cine.php" method="POST">
            <label for="tickets">Número de entradas:</label>
            <input type="number" name="tickets" min="0" required><br>
            <button type="submit">Comprar</button>
        </form>
       
</body>
</html>
