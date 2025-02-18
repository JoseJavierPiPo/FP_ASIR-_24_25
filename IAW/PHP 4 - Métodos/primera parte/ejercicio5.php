<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 5 PHP</title>
    </head>
    <h1>Introduce un número valor</h1>
    <fieldset>
        <form method="get">
            <input type="number" name="num1" placeholder="Introduce el valor 1"><br>
            <button type="submit">Enviar</button>
        </form><br>
    </fieldset>
    <body> <br>
        <?php
        
        //5. Comprobar si una variable está vacía.
        $num1 = $_GET['num1']; 
        
        function comprobarvariable($num1){
            if(empty ($num1)){
                echo "La variable esta vacía ";
            }
            else{
                echo "La variable no esta vacía ";
            }
            return $num1;
        }
        echo comprobarvariable($num1)

        ?>
    </body>
</html>
