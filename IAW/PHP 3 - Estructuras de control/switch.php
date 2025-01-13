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
        echo "<h2>comprueba opcion</h2>";
        $opcion = "b";
        switch ($opcion) {
            case "a":
                echo $opcion;
                break;
            case "b":
                echo $opcion;
                break;
            case "c":
                echo $opcion;
                break;
            default:
                echo "introduce opcion correcta";
                break;
        }
        //haz un switch que compruebe que el número de la variable numero es 1,2 o 3 , sino nos dirá que no es una opción correcta.
        echo "<h2>comprueba numero</h2>";
        $numero=1;
        
        ?>
    </body>
</html>
