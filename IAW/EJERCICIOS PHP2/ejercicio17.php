<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 17 PHP</title>
    </head>
    <body>
        <?php
        //. 17. Un programa, dados los grados centígrados actuales. Tras introducirlos, los pasará a grados
        //. Fahrenheit:
        //. F = ( C * 1,8) + 32.
        $grados=rand(1 ,45);
        $fahrenheit= (($grados * 1.8) +32);
        echo "La formula para pasar de grados centígrados a Fahrenheit es = F = ( C * 1,8) + 32. <br>";
        echo "Tenemos $grados <br>";
        echo "Los $grados º grados centígrados son $fahrenheit grados fahrenheit";
        ?>
    </body>
</html>