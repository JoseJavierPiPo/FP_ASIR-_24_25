<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 26</title>
    </head>
    <fieldset>
        <b>QUE OPERACIÓN QUIERES REALIZAR</b><br>
        - Suma = 1 
        - Resta = 2
        - Multiplicación = 3
        - División = 4
        <input>

        <br>
        <br>
        <input type="float" name="numero1" placeholder="Introduce el valor del num 1"><br>
        <br><input type="float" name="numero2" placeholder="Introduce el valor del num 2">
        <br>
        <button type="submit">Enviar valores </button>

    </fieldset>    
       
    <body>
    <?php
    //26. Un programa simula el comportamiento de una calculadora con las 4 operaciones básicas:
    //Suma, Resta, Multiplicación, División de dos números ingresados por el usuario.
    $numero = floatval($_GET['numero'] ?? 0);
    $numero1 = floatval($_GET['numero1'] ?? 0);
    $numero2 = floatval($_GET['numero2'] ?? 0);


    switch($numero){

    }
    //suma

    //resta

    //multiplicación

    //division


    ?>
    
    </body>
</html>