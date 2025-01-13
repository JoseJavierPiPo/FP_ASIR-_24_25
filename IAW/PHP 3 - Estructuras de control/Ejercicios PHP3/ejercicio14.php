<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 14</title>
    </head>
    
    <form>
        <input type="float" name="altura" placeholder="Altura del triangulo">
        <input type="float" name="base" placeholder="Base del triangulo">
        <button type="submit" name="enviar">Enviar Datos</button>
    </form>

    <body>
        <?php
        //. 14. Escribir un programa que calcule el área de un rectángulo del cual se le proporcionará por el 
        // teclado su altura y anchura (números decimales). 
        $altura = $_GET['altura'];
        $base = $_GET['base'];
        $area = $altura * $base;

        echo "Altura $altura cm. <br>";
        echo "Base $base cm. <br>";

        echo "Área de un Rectangulo ; Base $base cm,  Altura $altura cm = " .($base * $altura). " cm <br>";
        
        
        ?>
    </body>
</html>

