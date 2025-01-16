<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 13</title>
    </head>
        <form method="get">
            <input type="number" name="euro" placeholder="Introduce el dinero €">
            <button type="submit">Conversor a dolares</button>
        </form><br>

    <body>
        <?php
        //. 13. Escribir un programa que convierta de euros a dólares. 
        //. Recibirá un número decimal correspondiente a la cantidad en euros y 
        //. contestará con la cantidad correspondiente en dólares. 
        
        $euros = $_GET['euro'];
        $valordolar = 1.0359665;
        $dolar = $valordolar * $euros;
        
        // https://www.xe.com/es/currencyconverter/convert/?Amount=67&From=EUR&To=USD
        //. 1 USD = 0,965282 EUR
        //. 1 EUR = 1,0359665 USD
       
        echo "Has introducido en el conversor $euros € <br>";
        echo "Tras realizar la conversión tienes $dolar USD ";
        

        ?>
    </body>
</html>

