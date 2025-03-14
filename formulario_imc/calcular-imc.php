<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación y saneamiento de datos
    $nombre = htmlspecialchars(trim($_POST["nombre"] ?? ""), ENT_QUOTES, 'UTF-8');
    $peso = filter_var($_POST["peso"] ?? 0, FILTER_VALIDATE_FLOAT);
    $altura = filter_var($_POST["altura"] ?? 0, FILTER_VALIDATE_FLOAT);

    if ($peso === false || $altura === false || $peso <= 0 || $altura <= 0) {
        echo "<h2>Error:</h2><p style='color:red;'>Por favor, ingrese valores válidos.</p>";
    } else {
        // Cálculo del IMC
        $imc = $peso / ($altura * $altura);
        $categoria = "";

        if ($imc < 18.5) {
            $categoria = "Por debajo del peso";
        } elseif ($imc < 25) {
            $categoria = "Saludable";
        } elseif ($imc < 30) {
            $categoria = "Con sobrepeso";
        } elseif ($imc < 40) {
            $categoria = "Obeso";
        } else {
            $categoria = "Obesidad mórbida";
        }

        // Mostrar resultado
        echo "<div class='resultado'>";
        echo "<h3>Resultados para $nombre:</h3>";
        echo "<p><strong>IMC:</strong> " . number_format($imc, 2) . "</p>";
        echo "<p><strong>Categoría:</strong> $categoria</p>";
        echo "</div>";
    }
}
?>
