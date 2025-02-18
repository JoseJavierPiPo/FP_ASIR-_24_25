<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 34 PHP</title>
</head>
<body>
    <fieldset>
        <form method="get">
            <input type="floatval" name="numero1" placeholder="Introduce Número de 4 cifras"><br>
            <button type="submit">Enviar</button><br>
        </form><br>
    </fieldset>
    <br>
    <?php
    // 34. Un programa que permita leer un número entero de 4 cifras e imprimirlo al revés.
    $numero = floatval($_GET['numero1'] ?? 0);

    $numero1 = $numero % 10;
    $numero2 = ($numero / 10) % 10;
    $numero3 = ($numero / 100) % 10;
    $numero4 = ($numero / 1000) % 10;

    echo "El número al revés es: $numero1$numero2$numero3$numero4";
    ?>
</body>
</html>
