<!DOCTYPE html>
<html>
<head>
    <title>Multiplicación</title>
</head>
<body style="background:gray; color:white;">
    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <input type="submit" value="Multiplicar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $producto = $numero1 * $numero2;

        echo "El producto de $numero1 y $numero2 es: $producto";
    }
    ?>
</body>
</html>
