<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 13 PHP</title>
    </head>
    <h1>Leer el numero de palabras en una frase</h1>
    <fieldset>
        <form>
            <input type="float" name="texto" placeholder="Introduce la cadena de texto"><br>
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
    <body> <br>
        <?php
        
        //13 Contar el número de palabras en una frase (cadena).
        $num1 = $_GET['texto'];
        $palabras = '';

        // str_word_count(string $string, int $format = 0, string $charlist = ?): mixed

        function contarpalabras($num1){
            str_word_count($num1);
        }
    

        echo "El texto es : `` $num1 ´´ <br>";

        echo "El texto contiene"; echo contarpalabras($num1);
        

        ?>
    </body>
</html>
