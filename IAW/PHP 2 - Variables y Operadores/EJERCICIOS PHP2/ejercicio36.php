<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 36</title>
    </head>

    <body>
        <?php
      //. 36. Desarrollar un algoritmo que nos calcule el cuadrado de los 9 primeros números naturales
      $nu = "";
        for ($nu = 1; $nu <= 9; $nu++){
            
            if ($nu == 9){
                echo  pow($nu,2) . ".";
            }
            else{
                echo  pow($nu,2) . ",";
            }
        }
        
        ?>
    </body>
</html>


       