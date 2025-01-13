<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 8 PHP</title>
    </head>
    <body>
        <?php
        //.Escribir un programa que imprima por pantalla los cuadrados de los 30 primeros números naturales.
        for ($i = 1; $i <= 30; $i++){
            echo pow($i,2)."<br>";
        }
        ?>
    </body>
</html>