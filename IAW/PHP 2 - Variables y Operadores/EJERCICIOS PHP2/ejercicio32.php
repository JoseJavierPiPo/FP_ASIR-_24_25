<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 32</title>
    </head>

    <body>
        <?php
        // 32. Realizar un programa que imprima por pantalla los números del 1 al 9.
        for ($numero = 1; $numero <= 9; $numero++){

            if($numero == 9){
                echo "$numero.";
            }
            else {
                echo "$numero,";
            }
        }
        ?>
    </body>
</html>