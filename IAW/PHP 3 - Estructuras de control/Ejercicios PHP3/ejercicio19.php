<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 18</title>
    </head>
        <form method="get">
            <input type="float" name="edad" placeholder="Introduce la edad">
            <button type="submit" name="enviar">Introduce la edad</button>
        </form><br>
    <body>
        <?php
        //19. Según la edad de una persona, lo clasificaremos en las siguientes etapas: Infancia (menor de
        // catorce años), Juventud (entre catorce y 26 años), Adultez (entre 27 y 59 años) y personas mayores (igual o
        //superiores a 60 años)

        

        $edad = $_GET['edad'];
        if($edad < 14){

            echo "La edad que has introducido indica que se encuentra en la Infancia $edad, <br>"; 

        }
     
        else{
                if($edad < 27){
                    echo "La edad que has introducido india que se encuentra en la Juventud $edad <br>";
                }       
                else{

                    if($edad < 60){
                        echo "La edad que has introducido indica que se es una persona Adulta, $edad <br>"; 
                    }

                    else{
                        echo "La edad que has introducido indica que es una persona mayor, $edad <br>";
                    }
                }
        }
        
        ?>
    </body>
</html>

