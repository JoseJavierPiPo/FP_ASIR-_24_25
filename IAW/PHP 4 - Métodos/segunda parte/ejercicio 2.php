<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 </title>
</head>
<body>
<?php
    // 2. Escribe una función que devuelva el área de un círculo dado su radio. Recuerda 
    // que, para calcular el área, la fórmula es Π * r2. 

    
    $radio = rand(1,100);
    $pi = 3.1415926535898;
    echo "Vamos a calcular el área de un circulo a partir de su radio $radio cm <br>";

    function area($radio,$pi){
        return (($radio*$radio) * $pi);
    }
    echo "El resultado del area de un circulo es ";
    echo area($radio, $pi);
?>  
</body>
</html>
