<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 30 </title>
    </head>
        <form method="get">
           <input type="number" name="horas" placeholder="Horas trabajadas de Lunes a Viernes"> <br>
           <input type="number" name="extras" placeholder="Horas extras"> <br>
           <button type="submit" name="enviar">Envia las horas trabajadas</button> 
        </form><br>

    <body>
        <?php
            //. 30 A un trabajador le pagan según sus horas trabajadas y la tarifa está a un valor por hora.
            //. Si la  cantidad de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 50% para las horas extras. ç
            //. Calcular el salario del trabajador dadas las horas trabajadas y la tarifa. 
        
            $horas = $_GET['horas']; 
            $extras = $_GET['extras'];
            $precio = 9 ;
            if($horas <= 40){
                echo "Las horas trabajadas son $horas horas en horario laboral y las horas extras son $extras . <br>";
                echo "Por lo tanto su sueldo a final de mes es el equivalente a " . (($horas*$precio) + ($extras*$precio)) . "€ <br> ";
            }
            else{
                echo "Las horas trabajadas son $horas horas en horario laboral y las extras tiene $extras ";
                echo "Por lo tanto su sueldo a final de mes es el equivalente a " . (($horas*$precio)+($extras*($precio+($precio*0.5)))) . "€ ";
            }
    

        ?>
    </body>
</html>