<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\CSS\Recursos_Generales.css" type="text/css">
    <title>Ejercicio 1 de PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h3 {
            color: #333;
        }
    </style>
</head>
<body>
    <?php
        // Definir variables para el nombre y el apellido
        $nombre = "Waren";
        $apellido = "Sánchez";

        // Mostrar el encabezado con el nombre y apellido
        echo "<h3>$nombre $apellido</h3>";
    ?>
    <br><br>
    <a href="..\Proyecto_12.php" class="boton-portafolio">Volver al menu de ejercicios</a>
</body>
</html>
