<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\CSS\Recursos_Generales.css" type="text/css">
    <title>Ejercicio 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .numero {
            display: inline-block;
            font-size: 48px;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Número Aleatorio del 1 al 6</h1>
    <?php
        // Generar un número aleatorio entre 1 y 6
        $numero = rand(1, 6);

        // Mostrar el número aleatorio con estilo
        echo "<div class='numero'>$numero</div>";
    ?>
    <br><br>
    <a href="..\Proyecto_12.php" class="boton-portafolio">Volver al menu de ejercicios</a>
</body>
</html>
