<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\CSS\Recursos_Generales.css" type="text/css">
    <title>Ejercicio 6</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        td {
            width: 100px;
            height: 100px;
            border: 2px solid #333;
            text-align: center;
            vertical-align: middle;
        }
        .circle {
            width: 40px;
            height: 40px;
            background-color: black;
            border-radius: 50%;
            margin: 0 auto;
        }
        .resultado {
            margin-top: 20px;
            font-size: 1.5em;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Círculos Aleatorios</h1>
    <table>
        <tr>
            <?php
                // Generar un número aleatorio entre 1 y 10
                $numCirculos = rand(1, 10);

                // Dibujar las filas de la tabla con los círculos
                for ($i = 0; $i < $numCirculos; $i++) {
                    echo "<td><div class='circle'></div></td>";
                }

                $resultado = $numCirculos;
            ?>
        </tr>
    </table>
    <div class="resultado">
        <?php 
            echo "¡Se generaron {$resultado} círculos en total!"
        ?>
    </div>
    <br><br>
    <a href="..\Proyecto_12.php" class="boton-portafolio">Volver al menu de ejercicios</a>
</body>
</html>
