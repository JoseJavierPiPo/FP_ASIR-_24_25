<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 18</title>
    </head>

    <body>
        <?php
        //18. Escribir un programa que lea un número entero e imprima 
        // todos los números impares menores que el 
        
        $numero = rand(1,1000);
        echo "El numero leído es el $numero <br>";

        if($numero %2 == 0){
            
            echo "El $numero es par <br>";

        }

        else{
            echo "El $numero es impar <br>"; 
        }

        
        for ($i = 1; $i < $numero; $i += 2 ) {
            echo $i . "<br>";
        }
        
        ?>
    </body>
</html>

