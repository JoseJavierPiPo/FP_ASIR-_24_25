<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 24</title>
    </head>
        <b>Introduce un numero del 1 - 7</b>
        <form method="get">
            <input type="float" name="numero" placeholder="Introduce un número del 1 al 7" min="1" max="7">
            <button type="submit">Enviar valores</button>
        </form>
    <body><br>
    <?php
    // 24. Implementa una sentencia switch que escriba un mensaje en cada caso dado (por ejemplo, días
    // de la semana). Inclúyela en un bucle de prueba for. Utiliza un break tras cada caso y pruébalo. Elimina un
    // break y vea qué ocurre
    $numero = floatval($_GET['numero'] ?? 0);


        switch($numero){
            
            case 1: echo "Lunes"; break;
            case 2: echo "Martes"; break;
            case 3: echo "Miercoles"; break;
            case 4: echo "Jueves"; break;
            case 5: echo "Viernes"; break;
            case 6: echo "Sabado"; break;
            case 7: echo "Domingo"; break;
            
        }

    ?>

    </body>
</html>