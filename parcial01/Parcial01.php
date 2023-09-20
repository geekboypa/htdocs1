<!DOCTYPE html>
<html>
<head>
    <title>Parcial 1</title>
</head>
<body>
    <h1>Parcial 1</h1>
    <form method="post">
        <label for="numero">Ingrese un número par:</label>
        <input type="number" id="numero" name="numero" min="2" step="2" required>
        <input type="submit" value="Generar Matriz">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = $_POST["numero"];
        if ($N % 2 != 0) {
            echo "Por favor, ingrese un número par.";
        } else {
            function gennumramdon() {
                return rand(1, 100);
            }
            $matriz = array();
            for ($i = 0; $i < $N; $i++) {
                for ($j = 0; $j < $N; $j++) {
                    $matriz[$i][$j] = 0;
                }
            }

            // Rellena la primera fila y la última fila con números aleatorios
            for ($i = 0; $i < $N; $i++) {
                $matriz[0][$i] = gennumramdon();
                $matriz[$N - 1][$i] =   gennumramdon();
            }

            // Rellena la primera columna y la última columna con números aleatorios
            for ($i = 1; $i < $N - 1; $i++) {
                $matriz[$i][0] = gennumramdon();
                $matriz[$i][$N - 1] = gennumramdon();
            }
            $suma = 0;
            for ($i = 0; $i < $N; $i++) {
                for ($j = 0; $j < $N; $j++) {
                    if ($matriz[$i][$j] != 0) {
                        $suma += $matriz[$i][$j];
                    }
                }
            }
            echo '<table border="1">';
            for ($i = 0; $i < $N; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $N; $j++) {
                    echo '<td>' . $matriz[$i][$j] . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            echo '<p>La suma de los valores es: ' . $suma . '</p>';
        }
    }
    ?>
</body>
</html>
