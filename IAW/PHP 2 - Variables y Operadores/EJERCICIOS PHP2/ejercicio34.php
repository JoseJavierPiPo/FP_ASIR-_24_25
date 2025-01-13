<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 34</title>
    </head>

    <body>
        <?php
       // 34 Dada la velocidad de un coche, expresada en km/h, necesitamos saber cuántos metros por
       // segundos recorrer.


        $velocidad1 = rand(15,120);
        $velocidad2 = ($velocidad1 * 1000)/3600;

        echo "La velocidad de un coche es de $velocidad1 km/hora <br>";
        echo "Queremos pasar estos km/hora a metros/segundos realizamos un factor de conversión. <br>";
        echo "Realizamos la cuenta en este caso sería ($velocidad1 km * 1000m) * (1km) / 3600 segundos <br>";

        echo "La velocidad en metros/segundos seria de $velocidad2 metros/segundos";
        ?>
    </body>
</html>


       