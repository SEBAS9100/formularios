<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Amortización</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f9;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        form {
            background: #20F5E8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background: #2290F5;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #1A7CD1;
        }
    </style>
</head>
<body>
    <h2>Calculadora de Amortización</h2>
    <form action="calcular-amortizacion.php" method="post">
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" required>

        <label for="cliente">Nombre:</label>
        <input type="text" id="cliente" name="cliente" required>

        <label for="monto">Monto del Crédito:</label>
        <input type="number" id="monto" name="monto" min="1" required>

        <label for="tasa">Tasa de Interés Mensual (%):</label>
        <input type="number" id="tasa" name="tasa" step="0.01" min="0" required>

        <label for="plazo">Plazo en Meses:</label>
        <input type="number" id="plazo" name="plazo" min="1" required>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
