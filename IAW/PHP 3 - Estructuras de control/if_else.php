<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        echo "<h2>comprueba mayor de edad</h2>";
        $edad=17;
        if ($edad >= 18) {

            echo "eres mayor de edad";
            
        } else {
            
            echo "eres menor de edad";
        }
        echo "<br>";
        echo "<h2>comprueba par o impar</h2>";
        // crea una condición que compruebe que num1 es par o impar, lo podrás hacer conociendo el resto de la división si se divide para 2
        // nos dará un mensaje "num1 es par" o "num1 es impar";
        //cambia el valor de $num1 a un número par y vuelve a ejecutar el programa
        $num1 = 5;
        
        //busca información en wikipedia de como calcular un año bisiesto, comprueba si $ano es bisiesto, cambia el valor de $ano y vuelve a ejecutar
        $ano = 2004;

        ?>
    </body>
</html>
