<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 </title>
</head>
<fieldset>
            <form method="get">
                <center><b>CUAL DE LAS DISTINTAS FIGURAS GEOMÉTRICAS QUIERES CALCULAR SU ÁREA</b><br></center>
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

    $Operaciones = floatval($_GET['Operaciones'] ?? 0);
    switch($Operaciones){

        case 1: 
            echo "Has seleccionado realizar la suma de dos números";

            echo '
                        <form method="get">
                            <input type="float" name="numero1" placeholder="Introduce el valor">
                            <input type="float" name="numero2" placeholder="Introduce el valor">
                            <button type="submit">Enviar Valores</button>
                        </form>';
                        $numero1 = $_GET['numero1'] ?? 0;
                        $numero2 = $_GET['numero2'] ?? 0;
                        if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
                            $numero1 = floatval($_GET['numero1']);
                            $numero2 = floatval($_GET['numero2']);
                            function suma($numero1, $numero2) {
                                return $numero1 + $numero2;
                            }
                            $resultado = suma($numero1, $numero2);
                            echo "El resultado de la suma es = $resultado"
                        };
            
        break; 

        case 2:
            echo "Has seleccionado realizar la resta de dos números";

            echo '
                        <form method="get">
                            <input type="float" name="numero1" placeholder="Introduce el valor">
                            <input type="float" name="numero2" placeholder="Introduce el valor">
                            <button type="submit">Enviar Valores</button>
                        </form>';
                        $numero1 = $_GET['numero1'] ?? 0;
                        $numero2 = $_GET['numero2'] ?? 0;
                        function resta($numero1, $numero2){
                            return $numero1 - $numero2;
                        }
                        if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
                            $numero1 = floatval($_GET['numero1']);
                            $numero2 = floatval($_GET['numero2']);
                            $resultado = resta($numero1, $numero2);
                            echo "El resultado de la resta es = $resultado";
                        };

        break;
        case 3:
            echo "Has seleccionado realizar la multiplicación de dos números";

            echo '
                        <form method="get">
                            <input type="float" name="numero1" placeholder="Introduce el valor">
                            <input type="float" name="numero2" placeholder="Introduce el valor">
                            <button type="submit">Enviar Valores</button>
                        </form>';
                        $numero1 = $_GET['numero1'] ?? 0;
                        $numero2 = $_GET['numero2'] ?? 0;
                        function mul($numero1, $numero2){
                            return $numero1 * $numero2;
                        }
                        if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
                            $numero1 = floatval($_GET['numero1']);
                            $numero2 = floatval($_GET['numero2']);
                            $resultado = mul($numero1, $numero2);
                            echo "El resultado de la multiplicación es = $resultado";
                        };
        break;
        case 4:
            echo "Has seleccionado realizar la división de dos números";

            echo '
                        <form method="get">
                            <input type="float" name="numero1" placeholder="Introduce el valor">
                            <input type="float" name="numero2" placeholder="Introduce el valor">
                            <button type="submit">Enviar Valores</button>
                        </form>';
                        $numero1 = $_GET['numero1'] ?? 0;
                        $numero2 = $_GET['numero2'] ?? 0;
                        function div($numero1, $numero2){
                            return $numero1 / $numero2;
                        }

                        if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
                            $numero1 = floatval($_GET['numero1']);
                            $numero2 = floatval($_GET['numero2']);
                            $resultado = div($numero1, $numero2);
                            echo "El resultado de la división es = $resultado";
                        };
                    
        break;
    }

    
?>  
</body>
</html>
