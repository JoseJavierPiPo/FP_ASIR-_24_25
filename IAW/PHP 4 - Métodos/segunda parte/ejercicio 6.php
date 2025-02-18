<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
   
    <?php
    // Los empleados de una fábrica trabajan en dos turnos, Diurno y Nocturno. Se desea
    // calcular el jornal diario de acuerdo a con las siguientes reglas: 

    // La tarifa de las horas diurnas es de 10 €
    // 8. La tarifa de las horas nocturnas es de 13,5 €
    // 9. En caso de ser festivo, la tarifa se incrementa en un 10% en caso de turno diurno
    // y en un 15% para el nocturno.

    
    echo "Si el empleado trabaja 8 horas en turno Diurno no festivo cobra "; 
    echo diurno(); 
    echo "<br>";  

    echo "Si el empleado trabaja 8 horas en turno Diurno festivo cobra ";
    echo festivod();
    echo "<br>";

    echo "Si el empleado trabaja 8 horas en turno Nocturno no festivo cobra ";
    echo nocturno();
    echo "<br>";

    echo "Si el empleado trabaja 8 horas en turno Nocturno festivo cobra ";
    echo festivon();
    echo "<br>";

    function diurno(){
        $tarifad = 10;
        $horas = 8;
        $resultado = $tarifad * $horas;
        return $resultado;
    }

    function festivod(){
        $horas = 8;
        $tarifad = 10;
        $diurno = 0.1;
        $tarifaplus = ($tarifad * $diurno) + $tarifad;
        $resultado = $tarifaplus * $horas;
        return $resultado;
    }

    function nocturno(){
        $tarifan = 13.5 ;
        $horas = 8;
        $resultado = $tarifan * $horas;
        return $resultado;
    }

    function festivon(){
        $horas = 8;
        $tarifan = 13.5;
        $tarifaplus = (($tarifan * 0.15) + $tarifan);
        $resultado = $tarifaplus * $horas;
        return $resultado;
    }

    ?>
</body>
</html>
