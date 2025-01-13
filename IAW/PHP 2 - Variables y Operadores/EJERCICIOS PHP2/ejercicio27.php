<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 27 </title>
    </head>
    <body>
        <?php
            //.  27. Algoritmo que, dados dos números, calculando y escribiendo el valor de su suma, resta, 
            //. producto y división. 
            $numero1 = rand(1,100);
            $numero2 = rand(1,100);

            $suma = ($numero1 + $numero2);
            $resta= ($numero1 - $numero2);
            $producto= ($numero1 * $numero2);
            $division= ($numero1 / $numero2);

            echo " La suma de $numero1 y $numero2 es de = $suma <br>";
            echo " La resta de $numero1 y $numero2 es de = $resta <br>";
            echo " El producto de $numero1 y $numero2 es de = $producto <br>";
            echo " La division de $numero1 y $numero2 es de = $division <br>";
        ?>
    </body>
</html>