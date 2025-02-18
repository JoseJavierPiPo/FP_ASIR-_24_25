<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 4 PHP</title>
    </head>
    <h1>Introduce un número decimal</h1>
    <fieldset>
        <form method="get">
            <input type="number" name="num1" placeholder="Introduce el valor 1"><br>
            <button type="submit">Enviar</button>
        </form><br>
    </fieldset>
    <body> <br>
        <?php
        
        //4. Calcular la raíz cuadrada de un número dado.
        $num1 = $_GET['num1'];
        function raizcuadrada($num1){
            $raiz = sqrt($num1);  
            return "La raíz cuadrada de $num1 es $raiz";
        }


        echo raizcuadrada($num1);
        ?>
    </body>
</html>
