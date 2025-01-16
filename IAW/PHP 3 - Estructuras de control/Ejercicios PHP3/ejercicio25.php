<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 25</title>
    </head>
        
        <fieldset>
            <center><h3>Conversor</h3></center>
            <form method="get">
                <br>Introduce un dígito para mostrar su correspondiente letra segun el alfabeto castellano<br>
                <input type="number" name="numero" placeholder="Introduce un dígito" min="1" max="7"><br>
                <button type="submit">Enviar valores</button>
            </form><br>
                <br>Introduce un número romano para mostrar su correspondiente numero>
            <form method="get">
                <input type="string" name="romano" placeholder="Introduce un carácter romano" min="1" max="7"><br>
                <button type="submit">Enviar valores</button>
            </form><br>
            
        </fieldset>
    <body><br>
    <?php
    // 25. Leer un número de un dígito y escribir su correspondiente en letra según el alfabeto castellano.
    //Leer una letra que corresponda a un número romano (carácter) y encontrar su valor en números
    //decimales, en caso contrario, decir que no es un número romano válido.
    $numero = floatval($_GET['numero'] ?? 0);


        switch($numero){
            
            case 1: echo "A"; break;
            case 2: echo "B"; break;
            case 3: echo "C"; break;
            case 4: echo "D"; break;
            case 5: echo "E"; break;
            case 6: echo "F"; break;
            case 7: echo "G"; break;
            default : echo"valor no valido";

        }
       
    $romano = ($_GET['romano'] ?? 0);
        echo "<br>";
        switch ($romano){
            case "I": echo "1"; break;
            case "V": echo "5"; break;
            case "X": echo "10"; break;
            case "L": echo "50"; break;
            case "C": echo "100"; break;
            case "D": echo "500"; break;
            case "M": echo "1000"; break;
            default : echo"valor no valido";
        }



    ?>
    
    </body>
</html>