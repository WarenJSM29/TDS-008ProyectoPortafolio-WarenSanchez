<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\CSS\Recursos_Generales.css" type="text/css">
    <title>Ejercicio 8</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .dados {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .dado {
            width: 50px;
            height: 50px;
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
    <h1>Tirada de Dados en Idioma Aleatorio</h1>
    <div class="dados">
        <?php
            // Matriz de mensajes en diferentes idiomas
            $mensajes = [
                'es' => 'Total de puntos obtenidos: ',
                'en' => 'Total points obtained: ',
                'fr' => 'Total des points obtenus: ',
                'de' => 'Gesamtpunkte: ',
                'it' => 'Totale dei punti ottenuti: '
            ];

            // Idiomas disponibles
            $idiomas = array_keys($mensajes);

            // Seleccionar un idioma al azar
            $idiomaAleatorio = $idiomas[rand(0, count($idiomas) - 1)];

            // Generar un número aleatorio de dados entre 1 y 10
            $numDados = rand(1, 10);

            // Ruta de las imágenes de los dados desde la raíz del servidor
            $rutaImagenes = '../../Images/Proyecto_12/Dados/';

            // Inicializar el total de puntos
            $totalPuntos = 0;

            // Dibujar los dados y calcular el total de puntos
            for ($i = 0; $i < $numDados; $i++) {
                $valorDado = rand(1, 6);
                $totalPuntos += $valorDado;
                echo "<div class='dado'><img src='{$rutaImagenes}Cara_{$valorDado}.png' alt='Dado {$valorDado}'></div>";
            }
        ?>
    </div>
    <div class="resultado">
        <?php
            echo $mensajes[$idiomaAleatorio] . $totalPuntos;
        ?>
    </div>
    <br><br>
    <a href="..\Proyecto_12.php" class="boton-portafolio">Volver al menu de ejercicios</a>
</body>
</html>
