<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 25</title>
    </head>
    <body>
        <?php
            //. 25. El nuevo banco nacional, va a aplicarle un 20% de interés a todos sus usuarios. 
            //. Calcula cuál será la cantidad final de dinero que tendrás tras aplicarse este interés.

            $dineroinicial  = 1200;
            $interes = 0.20;
            $cantidadfinal = $dineroinicial + ($dineroinicial * $interes);

            echo " EL nuevo banco nacional aplica un 20 % de interés a todos sus usuarios <br> ";
            echo " Paco tiene en su banco $dineroinicial €, y se ha incrementado gracias al interes del 20 % en un $cantidadfinal €";

        ?>
    </body>
</html>