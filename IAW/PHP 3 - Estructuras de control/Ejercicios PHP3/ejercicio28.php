<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 28</title>
</head>
<body>
    <fieldset>
        <b>Los valores de los Triángulos A y B.</b>
        <form method="get">
            <input type="number" name="basea" placeholder="Base Triángulo A">
            <input type="number" name="alturaa" placeholder="Altura Triángulo A">
            <br>
            <input type="number" name="baseb" placeholder="Base Triángulo B">
            <input type="number" name="alturab" placeholder="Altura Triángulo B">
            <button type="submit">Enviar Valores</button>
        </form>
    </fieldset><br>
    <?php
    // 28. Pide los datos (base y altura) de dos triángulos y determina cuál de ellos tiene mayor área.
    // (llámalos primero y segundo).
    $basea = floatval($_GET['basea'] ?? 0);
    $alturaa = floatval($_GET['alturaa'] ?? 0);
    $baseb = floatval($_GET['baseb'] ?? 0);
    $alturab = floatval($_GET['alturab'] ?? 0);

    $areaa = ($basea * $alturaa) / 2;
    $areab = ($baseb * $alturab) / 2;

    if ($areaa > $areab) {
        echo "El Área del Triángulo A es mayor que el B: $areaa cm²";
    } else {
        echo "El Área del Triángulo B es mayor que el A: $areab cm²";
    }
    ?>
</body>
</html>
