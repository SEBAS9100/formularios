<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    // Validación y saneamiento de datos
    $vendedor = htmlspecialchars(trim($_POST["vendedor"] ?? ""), ENT_QUOTES, 'UTF-8'); 
    $cantidad = filter_var($_POST["cantidad"] ?? 0, FILTER_VALIDATE_INT);
    $totalVentas = filter_var($_POST["totalVentas"] ?? 0, FILTER_VALIDATE_FLOAT);

    if ($cantidad === false || $totalVentas === false) {
        echo "<h2>Error:</h2><p>Los datos ingresados no son válidos.</p>";
    } else {
        // Definición de variables
        $salarioBase = 737000;
        $comisionPorAuto = 50000;
        $comisionPorVenta = 0.05 * $totalVentas;
        
        // Cálculo del salario final
        $salarioFinal = $salarioBase + ($cantidad * $comisionPorAuto) + $comisionPorVenta;
        
        // Mostrar resultado
        echo "<h2>Resultado:</h2>";
        echo "<p><strong>Nombre del vendedor:</strong> $vendedor</p>";
        echo "<p><strong>Salario final:</strong> $" . number_format($salarioFinal, 0, ',', '.') . "</p>";
    }
}
?>
