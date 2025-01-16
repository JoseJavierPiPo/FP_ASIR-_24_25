<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 23</title>
    </head>
        <b>TEMPERATURAS</b><br>
        <form method="get">
            <input type="float" name="grado" placeholder="Introduce los grados">
            <button type="submit">Enviar valores</button>
        </form><br>

    <body>
    <?php
    // 23. Escriba un programa que lea temperaturas expresadas en grados Fahrenheit y las convierta a 
    //grados Celsius mostrándola. 
    //El programa finalizará cuando lea un valor de temperatura igual a 999. La 
    //conversión de grados Farenheit (F) a Celsius (C) está dada por C = 5/9*(F − 32).

    $fahrenheit = floatval($_GET['grado']);
    $centigrados = (5 / 9*($fahrenheit -32));
    
    if($fahrenheit >= 999){
        echo"Donde vas coleguita que tas quemao";
    }
    else{
        echo "El resultado son $centigrados º grados Celsius";
    }
    ?>

    </body>
</html>