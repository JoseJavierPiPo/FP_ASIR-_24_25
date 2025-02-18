<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 8 PHP</title>
    </head>
    <h1>Introduce una Cadena de Texto</h1>
    <fieldset>
        <form method="get">
            <input type="string" name="num1" placeholder="Introduce una cadena"><br>
            <button type="submit">Enviar</button>
        </form><br>
    </fieldset>
    <body> <br>
        <?php
        
        //8. Devuelve la longitud de una cadena dada.
        $num1 = $_GET['num1'];
    
        function devolvercadena($num1){
            echo strlen($num1);
        }
        
        echo devolvercadena($num1);

        ?>
    </body>
</html>
