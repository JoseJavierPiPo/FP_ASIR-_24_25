<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 </title>
</head>
<fieldset>
            <form method="get">
                <center><b>CALCULADORA</b><br></center>
                <br><br>
                <center>
                    <select name="Operaciones">
                        <option value="1">Suma</option>
                        <option value="2">Resta</option>
                        <option value="3">Multiplicación</option>
                        <option value="4">División</option>
                    </select><br><br>

                    <button type="submit">Enviar</button>

                </center>

            </form><br><br>
        </fieldset><br><br>
<body>
<?php
    // 4. Crea un programa que reciba dos números y un código de operación y permita 
    // calcular las operaciones básicas (suma, resta, multiplicación y división) entre estos 
    // dos números.
    include_once 'ejercicio 4 .1.php';
    //aquí está el problema :D
    $Operaciones = floatval($_GET['Operaciones'] ?? 0);
    switch($Operaciones){

        case 1: 
            pedirvalores();
            $resultado1 = suma();
  
        break;

        

        case 2: 
            echo pedirvalores($num1, $num2);
            echo resta($num1,$num2);
            $resultado2 = resta($num1,$num2);
            echo $resultado2;
        break;

        case 3: 
            echo pedirvalores($num1, $num2);
            echo mul($num1,$num2);
            $resultado3 = mul($num1,$num2);
            echo $resultado3;
        break;

        case 4:
            echo pedirvalores($num1, $num2);
            echo div($num1,$num2);
            $resultado4 = div($num1,$num2);
            echo $resultado4;
        break;
        default:
        echo "Vamos si entra quí porque no le da tiempo a hacer ";
        break;     
    }
    echo $resultado1; 
 
    
?>  
</body>
</html>
