<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 9 PHP</title>
    </head>
    <h1>Reemplazar texto en cadena</h1>

    <body> <br>
        <?php
        
        //9. Reemplazar texto en cadena.
        $texto = "Los juego del hambre se realizan cada año";
        $contador = 0;
        $texto1 = str_replace('juego', 'años', $texto, $contador);
        echo "$texto1 <br>";
        echo $contador;
        
        ?>
    </body>
</html>
