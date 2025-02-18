<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
<body>
    <?php
    // Realizar un programa que imprima en pantalla los números primos comprendidos entre 1 y el 100
    echo "Números primos entre 1 y 100:<br>";

    for ($i = 1; $i <= 100; $i++) {
        $primo = true;
        if ($i < 2) {
            $primo = false;
        } else {
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $primo = false;
                    break;
                }
            }
        }
        if ($primo) {
            echo "$i ";
        }
    }
    ?>
</body>
</html>
