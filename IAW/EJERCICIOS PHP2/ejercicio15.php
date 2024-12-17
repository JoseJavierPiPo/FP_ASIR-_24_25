<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 15 PHP</title>
    </head>
    <body>
        <?php
        $kilobytes=rand(1 ,2000000000000);
        $megabytes= $kilobytes /1000 ;
        $terabytes= $megabytes /1000000 ;
        echo"Los $kilobytes kylobytes se convierten en $megabytes megabytes.";
        echo"Los $megabytes megabytes se convierten en $terabytes terabytes.";
        ?>
    </body>
</html>