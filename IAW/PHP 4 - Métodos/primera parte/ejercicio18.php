<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 </title>
</head>
<body>
<?php

    // 18. Redondear un número hacia abajo.
    $num1 = 10.4;

    echo "El número a redondear es $num1 = ";


    $resultado = round($num1, 0, PHP_ROUND_HALF_DOWN);

    echo $resultado;
    
?>
</body>
</html>