<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 24</title>
    </head>
    <body>
        <?php
            //. 24. Un programa que dados la cantidad de alumnos y de alumnas que hay en tu clase, tras 
            //.procesarlo, mostrará el porcentaje correspondiente a cada género.  

            $alumnos = 23;
            $alumnas = 14;
            $total = $alumnos + $alumnas;
            $varones = ($alumnos / $total)* 100;
            $hembras = ($alumnas / $total)* 100; 
                
            echo "En una clase existen un total de  " .($alumnos + $alumnas). " personas <br>";
            echo "En total el porcentaje de alumnos varones es de $varones % <br>";
            echo "En total el porcentaje de alumnas hembras es de $hembras % <br>";


        ?>
    </body>
</html>