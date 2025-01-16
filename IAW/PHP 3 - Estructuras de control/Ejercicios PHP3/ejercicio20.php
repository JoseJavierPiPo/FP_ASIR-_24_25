<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 20</title>
    </head>
        <b>Vamos a realizar el MCD</b><br>
        <form method="get">
            <input type="float" name="a" placeholder="Introduce el numero a">
            <input type="float" name="b" placeholder="Introduce el numero b">
            <button type="submit">Enviar valores </button>
        </form><br>
    <body>
    <?php
        $a = floatval($_GET['a']);
        $b = floatval($_GET['b']);

        while ($b != 0){
            // B debe ser distinto de 0 en el momento que llegue a 0 el bucle termina
            $resto = $a % $b;  // Guardar el valor de la variable $b en temp 
            $a = $b ;
            $b = $resto; // Acutializa b con el valor del resto

        }

        echo "El MCD es $a,  y el resto es $b";

        ?>
    </body>
</html>

