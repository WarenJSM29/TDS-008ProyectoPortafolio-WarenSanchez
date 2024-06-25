<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\CSS\Recursos_Generales.css" type="text/css">
    <title>Ejercicio 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .dados {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .dado {
            width: 100px;
            height: 100px;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
        }
        .dado img {
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
    <h1>Tirada de Dados</h1>
    <div class="dados">
        <?php
            // Generar dos números aleatorios entre 1 y 6
            $dado1 = rand(1, 6);
            $dado2 = rand(1, 6);

            // Ruta de las imágenes de los dados desde la raíz del servidor
            $rutaImagenes = '../../Images/Proyecto_12/Dados/';

            // Mostrar las imágenes correspondientes a los números aleatorios
            echo "<div class='dado'><img src='{$rutaImagenes}Cara_{$dado1}.png' alt='Dado {$dado1}'></div>";
            echo "<div class='dado'><img src='{$rutaImagenes}Cara_{$dado2}.png' alt='Dado {$dado2}'></div>";

            // Determinar si los valores son iguales o encontrar el mayor de los dos
            if ($dado1 == $dado2) {
                $resultado = "¡Es una pareja de valores iguales!";
            } else {
                $mayorValor = max($dado1, $dado2);
                $resultado = "El mayor valor es: {$mayorValor}";
            }
        ?>
    </div>
    <div class="resultado">
        <?php
            echo $resultado;
        ?>
    </div>
    <br><br>
    <a href="..\Proyecto_12.php" class="boton-portafolio">Volver al menu de ejercicios</a>
</body>
</html>
