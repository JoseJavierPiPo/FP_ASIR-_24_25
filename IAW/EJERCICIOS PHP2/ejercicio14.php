<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 14 PHP</title>
    </head>
    <body>
        <?php
        $segundos = rand(1,3600);
        $minutos = $segundos/60; 
        $horas = $minutos/60;

        echo "Tenemos $segundos segundos .";
        echo "Realizamos la operación de segungos a minutos por lo tanto son $minutos minutos .";
        echo "Realizamos la operación de minutos a horas y el resultado son $horas horas .";
        
        ?>
    </body>
</html>