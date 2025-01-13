<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 17</title>
    </head>
    
    <form>
        <input type="float" name="numero1" placeholder="Introduce el número 1"><br>
        <input type="float" name="numero2" placeholder="Introduce el número 2"><br>
        <input type="float" name="numero3" placeholder="Introduce el número 3"><br>
        <button type="submit" name="enviar">Enviar Datos</button>
    </form><br>

    <body>
        <?php
        //.17. Diseña un algoritmo que pida por teclado tres números; si el primero es negativo, debe 
        //. imprimir el producto de los tres y si no lo es, imprimirá la suma.
        
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $numero3 = $_GET['numero3'];

        if($numero1 < 0){
            echo "$numero1 x $numero2 x $numero3 <br>";
            echo "El resultado es " .($numero1 * $numero2 * $numero3). "<br>";
        }

        else{
            echo "$numero1 + $numero2 + $numero3 <br>";
            echo "El resultado es " .($numero1 + $numero2 + $numero3). "<br>";
        }
        ?>
    </body>
</html>

