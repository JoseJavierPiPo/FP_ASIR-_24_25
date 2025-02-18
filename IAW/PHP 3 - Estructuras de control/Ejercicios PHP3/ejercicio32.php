<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 32</title>
        </head>
    <fieldset>
        <form method="get">
            <input type="floatval" name="nota1" placeholder="Numero 1">
            <input type="floatval" name="nota2" placeholder="Numero 2">
            <input type="floatval" name="nota3" placeholder="Numero 3">
            <input type="floatval" name="nota4" placeholder="Numero 4">
            <input type="floatval" name="nota5" placeholder="Numero 5">
            <br>
            <input type="floatval" name="nota6" placeholder="Numero 6">
            <input type="floatval" name="nota7" placeholder="Numero 7">
            <input type="floatval" name="nota8" placeholder="Numero 8">
            <input type="floatval" name="nota9" placeholder="Numero 9">
            <input type="floatval" name="nota10" placeholder="Numero 10"><br>
            <button type="submit">Enviar</button>
        </form><br>
    </fieldset>
    <body>
        <?php
        
        //32. Escribir un programa que lea 10 números enteros y luego muestre cuántos valores son
        //múltiplos de 3 y cuántos son de 5, por otro lado, se deberá indicar cuantos números son múltiplos de ambos a
        //la vez
        
        $numero1=floatval($_GET['nota1']?? 0);
        $numero2=floatval($_GET['nota2']?? 0);
        $numero3=floatval($_GET['nota3']?? 0);
        $numero4=floatval($_GET['nota4']?? 0);
        $numero5=floatval($_GET['nota5']?? 0);
        $numero6=floatval($_GET['nota6']?? 0);
        $numero7=floatval($_GET['nota7']?? 0);
        $numero8=floatval($_GET['nota8']?? 0);
        $numero9=floatval($_GET['nota9']?? 0);
        $numero10=floatval($_GET['nota10']?? 0);


        $numeroAComprobar = 13;
        $numeroDivisores = 0;   

        //Un número primo es aquel que solamente es divisible entre el mismo y la unidad
        
        for ($i=1; $i <= $numeroAComprobar /* optimizar el código */ ; $i++) 
        { 
                if ($numeroAComprobar % $i == 0)
                { 
                        $numeroDivisores++;//1 2
                }
        }
        
        if ($numeroDivisores <= 2)
        {
                echo " $numeroAComprobar es un número primo";
        }
        

        ?>
    </body>
</html>