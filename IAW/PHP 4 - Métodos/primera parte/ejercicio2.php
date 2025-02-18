<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 2 PHP</title>
    </head>
    <h1>Introduce dos valores para generar un numero random entre uno de ellos</h1>
    <fieldset>
        <form method="get">
            <input type="number" name="num1" placeholder="Introduce el valor 1">
            <input type="number" name="num2" placeholder="Introduce el valor 2"><br>
            <button type="submit">Enviar</button>
        </form><br>
    </fieldset>
    <body> <br>
        <?php
        
        //2 - Genera un número aleatorio comprendido entre dos dados.
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num = rand($num1,$num2);
        echo "El numero generado esta comprendido entre $num1 y $num2 <br>";
        echo "El numero generado es = $num";

        ?>
    </body>
</html>
