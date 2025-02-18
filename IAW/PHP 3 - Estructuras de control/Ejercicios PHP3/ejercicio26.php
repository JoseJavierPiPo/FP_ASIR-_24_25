<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 26</title>
    </head>
    <fieldset>

        <form method="get">
            <b>Selecciona la operación a realizar</b><br>
            <select name="numero">
                <option value="1">Suma</option>
                <option value="2">Resta</option>
                <option value="3">Multiplicación</option>
                <option value="4">División</option>
            </select><br>
            <input type="float" name="numero1" placeholder="Introduce el valor 1">
            <input type="float" name="numero2" placeholder="Introduce el valor 2"> <br>
            <button type="submit">ENTER</button>
        </form><br>
        

    </fieldset>    
       <br>
    <body>
    <?php
    //26. Un programa simula el comportamiento de una calculadora con las 4 operaciones básicas:
    //Suma, Resta, Multiplicación, División de dos números ingresados por el usuario.
    $numero = floatval($_GET['numero'] ?? 0);
    $numero1 = floatval($_GET['numero1'] ?? 0);
    $numero2 = floatval($_GET['numero2'] ?? 0);


    switch($numero){
        case 1 :
           echo "Realizando la suma de los números indicados <br>"  ;
           echo "Suma $numero1 + $numero2 =" .($numero1 + $numero2). " <br>";
            
            ;break;

        case 2 : 
            echo "Realizando la resta de los números indicados <br>"  ;
            echo "Resta $numero1 - $numero2 =" .($numero1 - $numero2). " <br>";
    
            ;break;

        case 3 : 
            echo "Realizando la multiplicación de los números indicados <br>"  ;
            echo "Multiplicación $numero1 x $numero2 =" .($numero1 * $numero2). " <br>";
            
            ;break;

        case 4 : 
            echo "Realizando la suma de los números indicados <br>"  ;
            echo "División $numero1 / $numero2 =" .($numero1 / $numero2). " <br>";
            
            ;break;
        
    }
   


    ?>
    
    </body>
</html>