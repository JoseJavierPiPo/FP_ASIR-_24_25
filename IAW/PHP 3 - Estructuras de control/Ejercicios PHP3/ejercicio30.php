<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 30</title>
    </head>
    <body>
        <fieldset>
            <form method="get">
                <input type="float" name="numero1" placeholder="Introduce el nº 1">
                <input type="float" name="numero2" placeholder="Introduce el nº 2">
                <input type="float" name="numero3" placeholder="Introduce el nº 3">
                <input type="float" name="numero4" placeholder="Introduce el nº 4">
                <input type="float" name="numero5" placeholder="Introduce el nº 5">
                <br>
                <input type="float" name="numero6" placeholder="Introduce el nº 6">
                <input type="float" name="numero7" placeholder="Introduce el nº 7">
                <input type="float" name="numero8" placeholder="Introduce el nº 8">
                <input type="float" name="numero9" placeholder="Introduce el nº 9">
                <input type="float" name="numero10" placeholder="Introduce el nº 10">
                <br> 
                <button type="submit">Enviar</button>
            </form>
        </fieldset><br>
    <?php
    //29. 30. Desarrollar un programa que permita introducir 10 valores dado y nos muestre la suma de los 
    // valores ingresados y su promedio. 
    $numero1 = floatval($_GET['numero1'] ?? 0);
    $numero2 = floatval($_GET['numero2'] ?? 0);
    $numero3 = floatval($_GET['numero3'] ?? 0);
    $numero4 = floatval($_GET['numero4'] ?? 0);
    $numero5 = floatval($_GET['numero5'] ?? 0);
    $numero6 = floatval($_GET['numero6'] ?? 0);
    $numero7 = floatval($_GET['numero7'] ?? 0);
    $numero8 = floatval($_GET['numero8'] ?? 0);
    $numero9 = floatval($_GET['numero9'] ?? 0);
    $numero10 = floatval($_GET['numero10'] ?? 0);
    
    $total = $numero1 + $numero2 + $numero3 + $numero4 +$numero5 + $numero6 + $numero7 + $numero8 + $numero9 + $numero10;
    $promedio = $total / 10;
    echo "Suma de los valores ingresados $total <br>";
    echo "Promedio de los valores ingresados $promedio <br>";
    
    ?>
</body>
</html>