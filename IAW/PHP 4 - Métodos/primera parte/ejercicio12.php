<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 12 PHP</title>
    </head>
    <h1>Comprobar si una cadena tiene un caracter indicado</h1>
    <body> <br>
        <?php
        
        //12 Generar una cadena aleatoria.
        //1º generar una cadena con los caracteres del alfabeto que queremos usar
        //2º generar un numero aleatorio para el tamaño de la cadena
        //3º generar caracteres aleatorios -> tamaño de la cadena
        $tamaño = rand(1,200);
        echo "El tamaño de cadena es de $tamaño caracteres <br><br>";
        $abecedario = 'abcdefghijklmnopqrstuvwxyz';
        $cadenaaleatoria = '';
        for($i = 0; $i < $tamaño; $i++){
            $cadenaaleatoria .= $abecedario[rand(0, strlen($abecedario))];
        }
        echo $cadenaaleatoria;

        ?>
    </body>
</html>
