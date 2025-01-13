<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 12</title>
    </head>
    <body>
        <form method="get">
            <input type="number" name="numero" placeholder="Introduce el numero">
            <button type="submit">Enviar valor</button>
        </form>   

        <?php
        // 12. Escribir un programa que lea un número entero y realiza la suma de los 100 números 
        // siguientes, mostrando el resultado.
            $i = $_GET['numero'];
            $suma = 0;

            for ($j = $i; $j < $i + 100; $j++) {
                $suma += $j;
            }

            echo "La suma de los 100 números siguientes a $i es: $suma";
        
        ?>
    </body>
</html>


