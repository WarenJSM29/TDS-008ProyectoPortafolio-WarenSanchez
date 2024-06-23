<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\TDS-008ProyectoPortafolio-WarenSanchez\CSS\Recursos_Generales.css" type="text/css">
    <title>Ejercicio 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .dado {
            width: 200px;
            height: 200px;
            border: 2px solid #333;
            border-radius: 10px;
            display: inline-block; /* Para centrar el dado */
            overflow: hidden;
            margin: 0 auto; /* Centra horizontalmente */
        }
        .dado img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Ajusta la imagen dentro del contenedor */
        }
    </style>
</head>
<body>
    <h1>Cara Aleatoria de Dado</h1>
    <div class="dado">
        <?php
            // Generar un número aleatorio entre 1 y 6
            $numero = rand(1, 6);

            // Ruta de las imágenes de los dados desde la raíz del servidor
            $rutaImagenes = '/TDS-008ProyectoPortafolio-WarenSanchez/Images/Proyecto_12/Dados/';

            // Mostrar la imagen correspondiente al número aleatorio
            echo "<img src='{$rutaImagenes}Cara_{$numero}.png' alt='Cara del dado'>";
        ?>
    </div>
    <br><br>
    <a href="..\Proyecto_12.php" class="boton-portafolio">Volver al menu de ejercicios</a>
</body>
</html>
