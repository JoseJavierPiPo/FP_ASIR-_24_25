<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 </title>
</head>
<form method="get">
    <h1>Introduce 3 números </h1>
    <input type="number" name="numero1" placeholder="Introduce el numero"><br>
    <input type="number" name="numero2" placeholder="Introduce el numero"><br>
    <input type="number" name="numero3" placeholder="Introduce el numero"><br>
    <button type="submit">Enviar</button><br><br>
</form>
<body>
<?php

    //17 - Obtener el máximo y/o el mínimo de tres números. 

    $num = $_GET['numero1'] ?? 0;
    $num1 = $_GET['numero2'] ?? 0;
    $num2 = $_GET['numero3'] ?? 0;

    $numeros  = array($num,$num1,$num2);

    echo "El número máximo es ". max($numeros). "<br>";
    echo "El número mínimo es ". min($numeros);
    

?>
</body>
</html>