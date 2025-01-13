<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 31</title>
    </head>

    <body>
        <?php
            // 31. Calcular la tabla de multiplicar (de 0 a 10) de un número dado.

        $numero = rand(1,100);
        echo "Tabla de multiplicar del número $numero<br>";

        for ($i = 1; $i <= 10; $i++) {
            echo "Cuentas $numero * $i = " . ($numero * $i) . "<br>";
        }
                
        ?>
    </body>
</html>