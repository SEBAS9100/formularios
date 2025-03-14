<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Nota Final</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #F50E00;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            color: white;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>    
</head>
<body>
    <form action="calcular-nota.php" method="post">
        <label for="parcial1">Parcial 1 (0-5):</label>
        <input type="number" step="0.01" name="parcial1" id="parcial1" min="0" max="5" required><br>

        <label for="parcial2">Parcial 2 (0-5):</label>
        <input type="number" step="0.01" name="parcial2" id="parcial2" min="0" max="5" required><br>

        <label for="parcial3">Parcial 3 (0-5):</label>
        <input type="number" step="0.01" name="parcial3" id="parcial3" min="0" max="5" required><br>

        <label for="examen_final">Examen Final (0-5):</label>
        <input type="number" step="0.01" name="examen_final" id="examen_final" min="0" max="5" required><br>

        <label for="trabajo_final">Trabajo Final (0-5):</label>
        <input type="number" step="0.01" name="trabajo_final" id="trabajo_final" min="0" max="5" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
