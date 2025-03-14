<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar datos y validar
    $cedula = htmlspecialchars(trim($_POST["cedula"]));
    $cliente = htmlspecialchars(trim($_POST["cliente"]));
    $monto = filter_var($_POST["monto"], FILTER_VALIDATE_FLOAT);
    $tasaInteres = filter_var($_POST["tasa"], FILTER_VALIDATE_FLOAT);
    $plazo = filter_var($_POST["plazo"], FILTER_VALIDATE_INT);

    if ($monto <= 0 || $tasaInteres < 0 || $plazo <= 0) {
        echo "<h2 style='color:red;'>Error: Ingrese valores válidos.</h2>";
        exit;
    }

    // Convertir tasa de interés de porcentaje a decimal
    $tasaDecimal = $tasaInteres / 100;

    // Cálculo de la cuota fija con validación para tasa 0%
    function calcularCuotaFija($monto, $tasaDecimal, $plazo) {
        if ($tasaDecimal == 0) {
            return round($monto / $plazo, 2); // Pago directo si la tasa es 0%
        } else {
            return round($monto * ($tasaDecimal * pow(1 + $tasaDecimal, $plazo)) / (pow(1 + $tasaDecimal, $plazo) - 1), 2);
        }
    }

    // Generar tabla de amortización
    function generarTablaAmortizacion($monto, $tasaDecimal, $plazo, $cedula, $cliente) {
        $cuotaFija = calcularCuotaFija($monto, $tasaDecimal, $plazo);
        $saldo = $monto;

        echo "<h2>Tabla de Amortización</h2>";
        echo "<p><strong>Cédula:</strong> $cedula</p>";
        echo "<p><strong>Cliente:</strong> $cliente</p>";

        echo "<table border='1' cellspacing='0' cellpadding='10'>";
        echo "<tr>
                <th>No. Cuota</th>
                <th>Saldo Anterior</th>
                <th>Valor Cuota Fija</th>
                <th>Abono Interés</th>
                <th>Abono Capital</th>
                <th>Nuevo Saldo</th>
              </tr>";

        for ($i = 1; $i <= $plazo; $i++) {
            $interes = round($saldo * $tasaDecimal, 2);
            $capital = round($cuotaFija - $interes, 2);
            $nuevoSaldo = round($saldo - $capital, 2);

            if ($nuevoSaldo < 0) {
                $nuevoSaldo = 0;
            }

            echo "<tr>
                    <td>$i</td>
                    <td>" . number_format($saldo, 2) . "</td>
                    <td>" . number_format($cuotaFija, 2) . "</td>
                    <td>" . number_format($interes, 2) . "</td>
                    <td>" . number_format($capital, 2) . "</td>
                    <td>" . number_format($nuevoSaldo, 2) . "</td>
                  </tr>";

            $saldo = $nuevoSaldo;
        }

        echo "</table>";
    }

    generarTablaAmortizacion($monto, $tasaDecimal, $plazo, $cedula, $cliente);
}
?>
