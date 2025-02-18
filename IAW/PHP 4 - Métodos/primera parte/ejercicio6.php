<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 6 PHP</title>
    </head>
    <h1>Introduce un valor</h1>
    <fieldset>
        <form method="get">
            <input type="number" name="num1" placeholder="Introduce el valor 1"><br>
            <button type="submit">Enviar</button>
        </form><br>
    </fieldset>
    <body> <br>
        <?php
        
        //6. Comprobar si una variable está definida y no es nula (no tiene valor y no es el
        // ejercicio anterior).
        $num1 = $_GET['num1'];

        function comprobacionvariable($num1){
            if(isset($num1)){
                echo "La variable esta definida y tiene valor ";
            }
            else{
                echo "La variable no esta definida ";
            }

            return $num1;
        }
        echo comprobacionvariable($num1);
        

        ?>
    </body>
</html>
