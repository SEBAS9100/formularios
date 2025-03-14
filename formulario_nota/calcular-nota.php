<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar y validar los datos
    $parcial1 = filter_var($_POST["parcial1"], FILTER_VALIDATE_FLOAT);
    $parcial2 = filter_var($_POST["parcial2"], FILTER_VALIDATE_FLOAT);
    $parcial3 = filter_var($_POST["parcial3"], FILTER_VALIDATE_FLOAT);
    $examen_final = filter_var($_POST["examen_final"], FILTER_VALIDATE_FLOAT);
    $trabajo_final = filter_var($_POST["trabajo_final"], FILTER_VALIDATE_FLOAT);

    // Verificar que todas las notas están dentro del rango permitido (0 - 5)
    if ($parcial1 < 0 || $parcial1 > 5 || 
        $parcial2 < 0 || $parcial2 > 5 || 
        $parcial3 < 0 || $parcial3 > 5 || 
        $examen_final < 0 || $examen_final > 5 || 
        $trabajo_final < 0 || $trabajo_final > 5) {
        echo "<h2 style='color:red; text-align:center;'>Error: Las notas deben estar entre 0 y 5.</h2>";
        exit;
    }

    // Pesos de cada componente
    $peso_parcial = 0.2;
    $peso_examen_final = 0.3;
    $peso_trabajo_final = 0.1;

    // Cálculo de la nota final
    $nota_final = ($parcial1 * $peso_parcial) 
                + ($parcial2 * $peso_parcial) 
                + ($parcial3 * $peso_parcial) 
                + ($examen_final * $peso_examen_final) 
                + ($trabajo_final * $peso_trabajo_final);

    // Determinar si aprobó o no
    $resultado = $nota_final >= 3 ? "Aprobó" : "No aprobó";

    // Mostrar los resultados con estilos
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultado de Nota Final</title>
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
            .resultado {
                background-color: #F50E00;
                color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 300px;
            }
            .nota {
                font-size: 24px;
                font-weight: bold;
            }
            .aprobado {
                color: #45a049;
            }
            .reprobado {
                color: yellow;
            }
        </style>
    </head>
    <body>
        <div class='resultado'>
            <h2>Tu Nota Final</h2>
            <p class='nota'>" . number_format($nota_final, 2) . "</p>
            <h3 class='" . ($nota_final >= 3 ? "aprobado" : "reprobado") . "'>$resultado</h3>
        </div>
    </body>
    </html>";
}
?>
