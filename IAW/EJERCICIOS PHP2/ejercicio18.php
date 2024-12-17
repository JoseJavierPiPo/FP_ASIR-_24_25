<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 18 PHP</title>
    </head>
    <body>
        <?php
            //.Dada las horas trabajadas de una persona y el sueldo por hora, calcular su salario e imprimirlo.
            $horasdiarias= 8;
            $sueldoporhora=7.50;
            $horassemanales = ($horasdiarias * 6);
            
            echo "Un trabajador en el campo trabaja 8 horas diarias en esta época del año cogiendo aceitunas <br>";
            echo "Si el trabajador trabaja $horasdiarias horas diarias y cobra la hora a $sueldoporhora € <br>";
            echo "Por lo tanto un trabajador que trabaja al mes $horassemanales horas, Cobra  " .(($horassemanales *4)* $sueldoporhora); echo "€ por mes trabajado.";
        ?>

    </body>
</html>