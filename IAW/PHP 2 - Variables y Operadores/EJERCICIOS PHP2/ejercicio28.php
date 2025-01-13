<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 28 </title>
    </head>
            <form method="get">
                <input  type="number" name="a" placeholder="Introduce el valor de A " ><br>
                <input  type="number"  name="b" placeholder="Introduce el valor de B " ><br>
                <button type="submit" name = "enviar">Enviar valores</button>
            </form>
    <body>
        <?php
                //. 28.Dadas dos variables numéricas A y B, que el usuario debe teclear, se pide realizar un algoritmo 
                //. que intercambie los valores de ambas variables y muestre cuánto valen al final las dos 
                //. variables
            $a = $_GET['b']; 
            $b = $_GET['a'];

            
            echo "Al introducir los valores se realiza el intercambio :<br>"; 
            echo "El valor de A es: " . $a . "<br>"; 
            echo "El valor de B es: " . $b . "<br>";
         
          
        ?>
    </body>
</html>