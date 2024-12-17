<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 23 PHP</title>
    </head>
    <body>
        <?php
        //.Debido a la nueva situación excepcional, una farmacia va a aplicar un descuento a sus 
        //.productos del 10%. Realizar un programa que muestre el nuevo precio de un artículo dado.
        $ibuprofreno = 27.5 ;
        $Paracetamol = 30 ;
        $nolotil = 25; 
        $mdma = 30;
        echo "Liquidación farmacia - 10 % en todos los productos <br>";
        echo "Precios sin rebajas $ibuprofreno €, $Paracetamol €, $nolotil €, $mdma €. <br>" ;
        $ibuprofreno_desc = ($ibuprofreno - ($ibuprofreno * 0.1));
        $Paracetamol_desc = ($Paracetamol - ($Paracetamol * 0.1));
        $nolotil_desc = ($nolotil - ($nolotil * 0.1)); 
        $mdma_desc = ($mdma - ($mdma * 0.1));
        echo "Precios con las rebajas $ibuprofreno_desc €, $Paracetamol_desc €, $nolotil_desc €, $mdma_desc €";
        ?>
    </body>
</html>