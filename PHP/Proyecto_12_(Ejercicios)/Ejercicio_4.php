<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\CSS\Recursos_Generales.css" type="text/css">
    <title>Ejercicio 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .cartas {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .carta {
            width: 100px;
            height: 150px;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
        }
        .carta img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .resultado {
            margin-top: 20px;
            font-size: 1.5em;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Cartas Aleatorias</h1>
    <div class="cartas">
        <?php
            // Generar tres números aleatorios entre 1 y 10
            $cartas = [];
            for ($i = 0; $i < 3; $i++) {
                $cartas[] = rand(1, 10);
            }

            // Ruta de las imágenes de las cartas desde la raíz del servidor
            $rutaImagenes = '../../Images/Proyecto_12/Cartas/';

            // Mostrar las imágenes correspondientes a los números aleatorios
            foreach ($cartas as $carta) {
                echo "<div class='carta'><img src='{$rutaImagenes}Carta_{$carta}.png' alt='Carta {$carta}'></div>";
            }

            // Calcular el valor más alto
            $maxValor = max($cartas);
        ?>
    </div>
    <div class="resultado">
        <?php
            echo "El valor más alto es: {$maxValor}";
        ?>
    </div>
    <br><br>
    <a href="..\Proyecto_12.php" class="boton-portafolio">Volver al menu de ejercicios</a>
</body>
</html>
