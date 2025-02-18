<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 </title>
</head>
<form method="get">
    <h1>Introduce dos numeros para realizar la suma </h1>
    <input type="number" name="num1" placeholder="Introduce el numero 1">
    <input type="number" name="num2" placeholder="Introduce el numero 2">
    <button type="submit">Enviar</button>
</form>
<body>
<?php
    // 1. Crea una función que reciba dos números reales y devuelva su suma. 

    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;

    function suma($num1, $num2){
        return $num1 + $num2;
    }
    echo "La suma entre los numeros es ";
    echo suma($num1, $num2);
?>  
</body>
</html>
