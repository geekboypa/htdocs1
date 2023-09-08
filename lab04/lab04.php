<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Indicador de Ventas</title>
</head>
<body>
    <h1>Indicador de Ventas</h1>
    <form method="post">
        <label for="ventas">Porcentaje de Ventas:</label>
        <input type="number" name="ventas" id="ventas" min="0" max="100" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $ventas = $_POST["ventas"];

        if ($ventas > 80) {
            $imagen = "semaforo_verde.png";
        } elseif ($ventas >= 50 && $ventas <= 79) {
            $imagen = "semaforo_amarillo.png";
        } else {
            $imagen = "semaforo_rojo.png";

        }

        echo "<p>Tu desempeño de ventas está en $ventas%.</p>";
        echo "<img src='img/$imagen'>";
    }
    ?>
</body>
</html>
