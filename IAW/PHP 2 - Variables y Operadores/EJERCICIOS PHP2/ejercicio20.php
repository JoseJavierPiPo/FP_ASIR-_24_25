<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 20 PHP</title>
    </head>
    <body>
        <?php
        //.20. Calcular el área de un rectángulo. Los valores serán dados.
        // Area de rectangulo 
        $ladorectangulo = rand (1,100);
        $anchorectangulo = rand (1,100);
        $arearecta = $ladorectangulo * $anchorectangulo;
        echo "El lado de un rectangulo mide $ladorectangulo cm y el ancho mide $anchorectangulo cm <br>";
        echo "El area de un rectangulo es la operación de lado x ancho por lo tanto el áres mide $arearecta cm"; 
        ?>
    </body>
</html>