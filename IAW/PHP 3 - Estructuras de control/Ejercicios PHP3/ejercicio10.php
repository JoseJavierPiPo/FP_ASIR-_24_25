<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 10 PHP</title>
    </head>
    <body>
        <?php
        //.Escribir un programa que multiplique los 20 primeros números naturales (1*2*3*4*5…) y muestre el resultado
        $ejemplo="";
        $num= 1;
        for ($i = 1; $i <= 20; $i++)
        {
            $num *= $i;
           if ($i == 20)
           {
             $ejemplo = $ejemplo.$i;

           }

           else{
            $ejemplo = $ejemplo.$i. "*";
           }
        }
        
        echo "$ejemplo = $num";

        ?>
    </body>
</html>