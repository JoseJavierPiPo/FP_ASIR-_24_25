<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
    <fieldset>
        <h1>Introduce un número para imprimir los numeros primos menores </h1>
        <form method = "get">
            <input type="number" name="numero1" placeholder="Introduce el numero">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
</head>
<body>
    <?php
    //Crea un procedimiento que nos dado un número N, nos devuelva los primos
    //anteriores a este
    $numero = $_GET['numero1'];
    
    function menores($numero){
        if ($numero > 1) {
            for ($i = $numero - 1; $i >= 1; $i--) {
                echo $i . "<br>";
            }
        } else {
            echo "El número debe ser mayor que 1";
        }
    }
    

    echo "Los numeros primos menores a $numero son = <br>";
    echo menores($numero);

    function primos(){
        echo menores($numero) = $resultado;
            function esPrimo($$resultado) {
                if ($resultado <= 1) {
                    return false;
                }
            
                for ($i = 0; $i <= sqrt($resultado); $i++) {
                    if ($resultado % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
    }

  
    
    ?>
</body>
</html>
