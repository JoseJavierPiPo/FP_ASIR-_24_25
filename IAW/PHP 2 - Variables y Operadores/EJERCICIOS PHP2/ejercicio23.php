<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 23</title>
    </head>
    <body>
        <?php
            //. 23. Debido a la nueva situación excepcional, una farmacia va a aplicar un descuento a sus
            //. productos del 10%. Realizar un programa que muestre el nuevo precio de un artículo dado. 
            

            $productooriginal = 25.8;
            $descuento = 0.1;
            $ibuprofenodescuento = $productooriginal - ($productooriginal*$descuento);
           
            
            echo "La Farmacia del pueblo esta en un periodo de liquidación.<br> ";
            echo "Aplicamos el 10%  de descuento en todos los productos de la farmacia .<br> ";
            echo "Los ibuprofenos estaran a $ibuprofenodescuento € mientras que el original costaba $productooriginal € <br>";

        ?>
    </body>
</html>