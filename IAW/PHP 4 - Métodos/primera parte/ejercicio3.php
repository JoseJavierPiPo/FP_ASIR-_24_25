<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 3 PHP</title>
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
        
        //3. Convertir un número decimal a entero
        $num1 = $_GET['num1'];
        $conversion = $num1;
        echo "El $num1 de decimal a entero se convierte en $conversion";

        ?>
    </body>
</html>
