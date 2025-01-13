<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 15</title>
    </head>
    
    <form>
        <input type="float" name="numero1" placeholder="Introduce el número 1"><br>
        <input type="float" name="numero2" placeholder="Introduce el número 2"><br>
        <button type="submit" name="enviar">Enviar Datos</button>
    </form><br>

    <body>
        <?php
        //. 15. Escribir un programa que lea dos números y diga cual es el mayor y cual el menor. 
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        // El signo > (mayor)
        //El signo < (menor)
        if($numero1 > $numero2){ 

            echo "El $numero1 es mayor que el $numero2";

        }
        else{
            echo "El $numero1 es menor que el $numero2";
        }
        
        
        ?>
    </body>
</html>

