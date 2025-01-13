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
        echo "¿Es 5 mayor que 3?: ";
        var_dump((5 > 3));
        echo "<br>";
        echo "¿Es 5 menor que 3?: ";
        var_dump((5 < 3));
        echo "<br>";
        echo "¿Es 5 igual que 5?: ";
        //devuelve true por que realiza una conversión implicita
        var_dump((5 == "5"));
        echo "<br>";
        echo "¿Es 5 igual que 5? y del mismo tipo: ";
        var_dump((5 === "5"));
        echo "<br>";
        echo "¿Es 5 distinto que 5?: ";
        var_dump((5 != "5"));
        echo "<br>";
        echo "¿Es 5 distinto que 5?: ";
        var_dump((5 <> "5"));
        echo "<br>";
        echo "¿Es 5 distinto que 3? y de distinto tipo: ";
        var_dump((5 !== "3"));
        echo "<br>";
        echo "¿Es 5 igual que 5? y 2 es igual a 2: ";
        var_dump((5 == 5 && 2 == 2));
        echo "<br>";
        echo "¿Es 5 distinto de 4 o 2 igual a 2: ";
        var_dump((5 == 4 || 2 == 2));
        //podemos incluir tantas condiciones () como queramos entre los paréntesis prinpales incluso incluir otros paréntesis dentro de los paréntesis para analizar bloques, como las matemáticas
        //por lo general compararemos identificadores o funciones.
        $dato1 = 5;
        $dato2 = 3;

        echo "<br>";
        echo "¿Es dato1 distinto que dato2?: ";
        var_dump(($dato1 != $dato2));

        //compara si a es igual a A  
        
        //compara si A es mayor que a
       
        //compara si 5 es mayor que 4 y que 7 es mayor que 8
        
        //compara si 5 es mayor que 4 o que 7 es mayor que 8
        
        //compara si a es distinto que b o 5 es distinto que "5" como dato
        
        ?>
    </body>
</html>
