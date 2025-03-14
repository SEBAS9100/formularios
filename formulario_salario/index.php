<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #E0A1F5;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #9107BB;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #7D0FA9;
        }
        .resultado {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="calcular-salario.php" method="post">
        <label for="vendedor">Nombre del vendedor:</label>
        <input type="text" id="vendedor" name="vendedor" required>
        
        <label for="cantidad">Cantidad de automóviles vendidos:</label>
        <input type="number" id="cantidad" name="cantidad" min="0" required>
        
        <label for="totalVentas">Precio total de los automóviles vendidos:</label>
        <input type="number" id="totalVentas" name="totalVentas" min="0" required>

        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>
