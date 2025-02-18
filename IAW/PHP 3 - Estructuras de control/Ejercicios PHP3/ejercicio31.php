<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 31</title>
    </head>
    <body>
        <fieldset>
            <form method="get">
                <input type="float" name="nota1" placeholder="Introduce la nota 1">
                <input type="float" name="nota2" placeholder="Introduce la nota nº 2">
                <input type="float" name="nota3" placeholder="Introduce la notanº 3">
                <input type="float" name="nota4" placeholder="Introduce la nota nº 4">
                <input type="float" name="nota5" placeholder="Introduce la nota nº 5">
                <br>
                <input type="float" name="nota6" placeholder="Introduce la nota nº 6">
                <input type="float" name="nota7" placeholder="Introduce la nota nº 7">
                <input type="float" name="nota8" placeholder="Introduce la nota nº 8">
                <input type="float" name="nota9" placeholder="Introduce la nota nº 9">
                <input type="float" name="nota10" placeholder="Introduce la nota nº 10">
                <br> 
                <button type="submit">Enviar</button>
            </form>
        </fieldset><br>
    <?php
    //29. 30. Desarrollar un programa que permita introducir 10 valores dado y nos muestre la suma de los 
    // valores ingresados y su promedio. 
    $numero1 = floatval($_GET['nota1'] ?? 0);
    $numero2 = floatval($_GET['nota2'] ?? 0);
    $numero3 = floatval($_GET['nota3'] ?? 0);
    $numero4 = floatval($_GET['nota4'] ?? 0);
    $numero5 = floatval($_GET['nota5'] ?? 0);
    $numero6 = floatval($_GET['nota6'] ?? 0);
    $numero7 = floatval($_GET['nota7'] ?? 0);
    $numero8 = floatval($_GET['nota8'] ?? 0);
    $numero9 = floatval($_GET['nota9'] ?? 0);
    $numero10 = floatval($_GET['nota10'] ?? 0);
    
    $mayores_o_iguales_a_7 = 0; 
    $menores_a_7 = 0;
    foreach ($notas as $nota) { 
    
        if ($nota >= 7){ 
            $mayores_o_iguales_a_7++; 
        } 
        else{ $menores_a_7++; 
        } 
    }
    ?>
</body>
</html>