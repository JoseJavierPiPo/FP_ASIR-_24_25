<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 26/title>
    </head>
    <body>
        <?php
            //.  Tres empleados de una empresa de programación, han tenido la suerte de recibir un incentivo 
            //.  incremento de su sueldo) en relación a su producción, respectivamente: 13%, 26% y 39%. 
            //.  Realiza un programa que calcule los nuevos sueldos.
            $empleado1 = 1700;
            $empleado2 = 1700;
            $empleado3 = 1700;
            
            $sueldo1 =  $empleado1 + ($empleado1 * 0.39);
            $sueldo2 =  $empleado2 + ($empleado2 * 0.26);
            $sueldo3 = $empleado3 + ($empleado3 * 0.13);

            echo " Tres empleados de una empresa de programación, han tenido la suerte de recibir un incentivo incremento de su sueldo) en relación a su producción.   <br>";
            echo " Respectivamente: 13%, 26% y 39% <br>"; 
            echo " El primer empleado ha incrementado su sueldo en un 39 % por lo tanto su sueldo se queda en $sueldo1 € <br>"  ;
            echo "El segundo empleado se ha incrementado su sueldo en un 26% y su sueldo se queda en $sueldo2 € <br> ";
            echo " EL tercer empleado ha conseguido incrementar su sueldo en un 13% en definitiva su nuevo sueldo es de $sueldo3 € <br>";                             

        ?>
    </body>
</html>