<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    <fieldset>
        <h1>Introduce un número para comprobar si es primo o no </h1>
        <form method = "get">
            <input type="number" name="numero1" placeholder="Introduce el numero">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
</head>
<body>
    <?php
    //Crea una aplicación que nos pida un número y, mediante un procedimiento, nos
    // indique si es este es primo o no.
    $numero = $_GET['numero1'];

    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
    
        for ($i = 0; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    if (esPrimo($numero)) {
        echo "El número $numero es primo.";
    } else {
        echo "El número $numero no es primo.";
    }

    


    ?>
</body>
</html>
