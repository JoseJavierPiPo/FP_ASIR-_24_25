<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 16</title>
    </head>
    
    <form>
        <input type="float" name="numero1" placeholder="Introduce el número 1"><br>
        <input type="float" name="numero2" placeholder="Introduce el número 2"><br>
        <input type="float" name="numero3" placeholder="Introduce el número 3"><br>
        <button type="submit" name="enviar">Enviar Datos</button>
    </form><br>

    <body>
        <?php
        //. 16. Escriba un programa que lea tres números enteros positivos, y que calcule e imprima en 
        //. pantalla el menor y el mayor de todos ellos. 
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $numero3 = $_GET['numero3'];

        $max = max ($numero1, $numero2, $numero3);
        $min = min ($numero1, $numero2, $numero3);

        echo "El mayor numero  es $max <br>";
        echo "El menor numero  es $min <br>";

        ?>
    </body>
</html>

