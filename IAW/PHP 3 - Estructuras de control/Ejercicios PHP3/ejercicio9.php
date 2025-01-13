<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 9 PHP</title>
    </head>
    <body>
        <?php
        //.Un programa que calcule la tabla de multiplicar de un número dado.
        $num = 2;
        for ($i = 1; $i <= 10; $i++ ){
            echo "$num x $i = ".($num * $i) ."<br>";
            
        }
        ?>
    </body>
</html>