<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        // la estructura del do while es do{}while(condicion); el bucle se repetirá mientras la condición sea verdadera, por ejemplo pedir datos de un campo de formulario hasta que se rellene correctamente.
        //el bucle do entra siempre y luego pregunta

        $lista = ["naranjas","peras","manzanas","sandias","melones"];
        $i=0;

        do{
            echo $lista[$i] . " <br> ";
            $i++;
        }while($i<count($lista));
        echo "-----------<br>";
        //el bucle while si cumple la condición entra, si no no entra.
        while($i>0){
            echo $lista[$i-1] . " <br> ";
            $i--;  
        }

        //Crea un bucle do-while que muestre los números del 0 al 10;

        ?>

      

    </body>
</html>
