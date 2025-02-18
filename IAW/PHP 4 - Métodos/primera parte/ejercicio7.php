<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 7 PHP</title>
    </head>
    <h1>Introduce una Cadena de Texto</h1>
    <fieldset>
        <form method="get">
            <input type="string" name="num1" placeholder="Introduce una cadena"><br>
            <button type="submit">Enviar</button>
        </form><br>
    </fieldset>
    <body> <br>
        <?php
        
        //7. Dada una cadena, convertirla a mayúsculas o a minúsculas.
        $num1 = $_GET['num1'];
        $num2 =  $_GET['num1'];

        function convertircadena($num1){
            if ($num1 == strtolower($num1)){
                return strtoupper($num1);
            }
            elseif ($num1 == strtoupper($num1)){
                return strtolower($num1);
            }
            else {
                return strtoupper($num1);
            }
        }

        echo convertircadena($num1);

        ?>
    </body>
</html>
