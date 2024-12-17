<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 24 PHP</title>
    </head>
    <body>
        <?php
        //. 24. Un programa que dados la cantidad de alumnos y de alumnas que hay en tu clase, tras
        //. procesarlo, mostrará el porcentaje correspondiente a cada género.

        $alumnos = 32;
        $alumnas = 16;
        $total = $alumnas + $alumnos;
        echo "En la clase hay $alumnos alumnos y $alumnas alumnas <br>";
        echo "El porcentaje de alumnos es = " .($alumnos / $total); 
        echo "%<br>" ;
        echo "El porcentaje de alumnas es = " .($alumnas / $total);
        echo "%";
        
        ?>
    </body>
</html>