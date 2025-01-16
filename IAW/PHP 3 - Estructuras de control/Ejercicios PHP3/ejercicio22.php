<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 22</title>
    </head>
        <b>Vamos a realizar el factorial de un número n</b><br>
        <form method="get">
            <input type="float" name="numero" placeholder="Introduce el numero a">
            <button type="submit">Enviar valores </button>
        </form><br>

    <body>
    <?php
    // 22. Escribe un programa que calcule el factorial de n. 
        $num= floatval($_GET['numero']);
        echo "$num =";
    for($i = 1; $i <= $num; $i++){
        $x = $i * $i;
        if($i >= $num){
            echo "$i = $x";
        }
        else{
            echo "$i *";
        }
    }

        ?>

    </body>
</html>