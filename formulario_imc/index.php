<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            background-color: #F5BD20;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #F55100;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #C54400;
        }
        .resultado {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <h2>Calculadora de Índice de Masa Corporal (IMC)</h2>
    <form action="calcular-imc.php" method="post">
        <label for="nombre">Nombre del paciente:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="peso">Peso en kilogramos:</label>
        <input type="number" id="peso" name="peso" step="0.1" min="0" required>

        <label for="altura">Estatura en metros:</label>
        <input type="number" id="altura" name="altura" step="0.01" min="0" required>

        <input type="submit" name="calcular" value="Calcular IMC">
    </form>
</body>
</html>
