<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 33 PHP</title>
    </head>
    <fieldset>
        <form method="get">
            <input type="floatval" name="numero1" placeholder="Introduce Numero 1 "><br>
            <input type="floatval" name="numero2" placeholder="Introduce Numero 2"><br><br>
            <button type="submit">Enviar</button><br>
        </form><br>
    </fieldset>
    <body> <br>
        <?php
        
        // 33. Imprimir los números primos comprendidos en un rango entre dos números dados. 
        // El primer número será el límite inferior y el segundo el límite superior.
        
        $numero1=floatval($_GET['numero1']?? 0);
        $numero2=floatval($_GET['numero2']?? 0);
        $numeroDivisores = 0;
        $numeroDivisores1 = 0;

        for ($i=1; $i <= $numero1 ; $i++) 
        { 
                if ($numero1 % $i == 0)
                { 
                        $numeroDivisores++;
                }
        }

        if ($numeroDivisores <= 2)
        {
                echo " $numero1 es un número primo <br>";
        }
        else {
                echo "$numero1 no es un número primo<br><br>";
        }

        for ($j=1; $j <= $numero2; $j ++){

                if ($numero2 % $j == 0)
                { 
                        $numeroDivisores1++;
                }
        }

        if ($numeroDivisores1 <= 2)
        {
                echo " $numero2 es un número primo";
        }
        else {
                echo "$numero2 no es primo <br><br>";
        }
        
        echo "Numero de Divisores comprendidos entre el $numero1 y $numero2 <br>";

        
                echo "$numeroDivisores";
        
        
                echo "$numeroDivisores1";


        ?>
    </body>
</html>