<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 10 PHP</title>
    </head>
    <h1>Comprobar si una cadena tiene un caracter indicado</h1>
    <fieldset>
        <form>
            <b>Introduce un caracter a comprobar si existe en la frase (en minusculas)</b><br><br>
            <input type="floatval" name="caracter" placeholder="Introduce un caracter">
            <button type="submit">Enviar</button><br>
        </form>
    </fieldset>
    <body> <br>
        <?php
        
        //10. Comprobar si una cadena tiene un carácter indicado
        $texto = "dani es subnormal";
        $caracter = $_GET['caracter'];
        echo "La frase es : DANI ES SUBNORMAL <br>";
        
        $comprobar= strpos($texto,$caracter);
        //false = 0 0 int
        if($comprobar !== false){
            echo "En la frase dani es subnormal, existe el caracter $caracter " ;
        }
        else{
            echo "En la frase dani es subnormal, no existe el caracter $caracter " ;
        }
        
        ?>
    </body>
</html>
