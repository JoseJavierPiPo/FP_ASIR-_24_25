<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 </title>
</head>
<body>
<?php
    //3. Escribe una función que devuelva el resultado de un número elevado a un 
    //exponente dado.  

    $num = rand(1,100);
    $ex = rand(1,50);
    echo "Vamos a devolver el resultado de un número elevado a un exponente <br>";
    echo "El número es $num y su exponente $ex <br>";

    function elevar($num, $ex){
        return pow($num, $ex);
    }
    echo "El resultado es = ";
    echo elevar($num, $ex);

?>  
</body>
</html>
