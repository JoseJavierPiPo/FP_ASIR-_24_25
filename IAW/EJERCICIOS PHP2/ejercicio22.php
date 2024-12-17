<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 22 PHP</title>
    </head>
    <body>
        <?php
        //. Calcula la longitud (2*PI*R) y el área de un círculo (PI*R2) a partir de un radio dado.
        $radio = rand(1,50);
        $longitud = (2*3.1415926535898*$radio);
        $circulo = (3.1415926535898* pow($radio,2));
        echo "Para calcular la longitud de un circulo realizamos la operación (2*PI*R) = (2*PI*$radio) = $longitud cm ";
        echo "Para calcular el área de un circulo realizat la operación (PI*R2) = (PI*($longitud)²) = $circulo cm ";

        ?>
    </body>
</html>