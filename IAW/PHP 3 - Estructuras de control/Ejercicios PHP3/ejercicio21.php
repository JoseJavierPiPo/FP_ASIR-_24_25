<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 21</title>
    </head>
        <b>Vamos a realizar una ecuación de segundo grado</b><br>
        <form method="get">
            <input type="float" name="a" placeholder="Introduce el numero a">
            <input type="float" name="b" placeholder="Introduce el numero b">
            <input type="float" name="c" placeholder="Introduce el numero d">
            <button type="submit">Enviar valores </button>
        </form><br>

    <body>
    <?php
    // 21. Escriba un programa que lea los coeficientes a, b y c de una ecuación de segundo, y estudie si 
    // tiene o no solución. //En caso positivo, las soluciones se calcularán e imprimirán en pantalla.

        $a = floatval($_GET['a']);
        $b = floatval($_GET['b']);
        $c = floatval($_GET['c']);


        // ax^2 + bx + c = 0 

        echo "La ecuación es $a x^2 + $b x + $c = 0 <br>";

        // x = -b +- sqrt(b^2 -4ac)
        //     --------------------
        //              2a
        $raiz = (($b*$b)- (4*$a*$c));

        if($raiz > 0){
            $x1 = (-$b + sqrt($raiz))/(2*$a);
            $x2 = (-$b - sqrt($raiz))/(2*$a);
            echo "La ecuación tiene soluciónes <br>";
            echo "x1 = $x1 <br>";
            echo "x2 = $x2 <br>";
        }
        elseif($raiz == 0){
            $x1 = -$b / (2 * $a);

            echo "La ecuación tiene una sola solución :<br>";
            echo "x₁ = x₂ = $x1 <br>";
        }
        else{
            echo "La ecuación no tiene solución <br>";
        }



        ?>

    </body>
</html>