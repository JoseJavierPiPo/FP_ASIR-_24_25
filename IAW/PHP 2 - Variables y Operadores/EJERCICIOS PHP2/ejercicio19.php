<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 19 PHP</title>
    </head>
    <body>
        <?php
        //. Calcular el área de un cuadrado. El valor del lado será dado.
        // Area de un cuadrado = lado x lado
        $ladocuadrado =rand(1,2000);
        $areacuadrado = $ladocuadrado * $ladocuadrado;
        echo "Tenemos un cuadrado de lado $ladocuadrado cm <br>";
        echo "Calculando del área de un cuadrado seria $areacuadrado cm";
        ?>
    </body>
</html>