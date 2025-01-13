<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 11 PHP</title>
    </head>
    <body>
        <?php
        //.Escribir un programa que sume los cuadrados de los cien primeros números naturales,
        $variable0="";
        $variableacumulada= 0 ;
     
        for ($i = 1; $i <= 100; $i++){
            
            $variableacumulada += pow($i,2);

            if($i == 100){
                $variable0 = $variable0.$i. "²";
            }
            else{
                $variable0 = $variable0.$i . "² + *";

            }
        }
        echo "$variable0 = $variableacumulada"
        ?>
    </body>
</html>