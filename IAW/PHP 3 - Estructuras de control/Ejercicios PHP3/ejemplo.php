<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 27</title>
</head>
<body>
    <fieldset>
        <form method="get">
            <center><b>CUAL DE LAS DISTINTAS FIGURAS GEOMÉTRICAS QUIERES CALCULAR SU ÁREA</b><br></center>
            <br><br>
            <center>
                <select name="areas">
                    <option value="1">Trapecio</option>
                    <option value="2">Triangulo</option>
                    <option value="3">Cuadrado</option>
                    <option value="4">Rectángulo</option>
                    <option value="5">Circulo</option>
                </select><br><br>

                <button type="submit">Enviar</button>
            </center>
        </form><br><br>
    </fieldset><br><br>

    <?php
    if (isset($_GET['areas'])) {
        $areas = intval($_GET['areas']);
        switch ($areas) {
            case 1:
                echo "Has seleccionado calcular el área del Trapecio <br>";
                echo "Inserta los datos:<br>";
                echo '<form method="get">
                        Base mayor: <input type="number" name="base_mayor"><br>
                        Base menor: <input type="number" name="base_menor"><br>
                        Altura: <input type="number" name="altura"><br>
                        <input type="hidden" name="areas" value="1">
                        <button type="submit">Calcular</button>
                      </form>';
                if (isset($_GET['base_mayor']) && isset($_GET['base_menor']) && isset($_GET['altura'])) {
                    $base_mayor = floatval($_GET['base_mayor']);
                    $base_menor = floatval($_GET['base_menor']);
                    $altura = floatval($_GET['altura']);
                    $area = ($base_mayor + $base_menor) * $altura / 2;
                    echo "Área del Trapecio = $area";
                }
                break;
            case 2:
                echo "Has seleccionado calcular el área del Triangulo <br>";
                echo "Inserta los datos:<br>";
                echo '<form method="get">
                        Base: <input type="number" name="base"><br>
                        Altura: <input type="number" name="altura"><br>
                        <input type="hidden" name="areas" value="2">
                        <button type="submit">Calcular</button>
                      </form>';
                if (isset($_GET['base']) && isset($_GET['altura'])) {
                    $base = floatval($_GET['base']);
                    $altura = floatval($_GET['altura']);
                    $area = $base * $altura / 2;
                    echo "Área del Triangulo = $area";
                }
                break;
            case 3:
                echo "Has seleccionado calcular el área del Cuadrado <br>";
                echo "Inserta los datos:<br>";
                echo '<form method="get">
                        Lado: <input type="number" name="lado"><br>
                        <input type="hidden" name="areas" value="3">
                        <button type="submit">Calcular</button>
                      </form>';
                if (isset($_GET['lado'])) {
                    $lado = floatval($_GET['lado']);
                    $area = $lado * $lado;
                    echo "Área del Cuadrado = $area";
                }
                break;
            case 4:
                echo "Has seleccionado calcular el área del Rectángulo <br>";
                echo "Inserta los datos:<br>";
                echo '<form method="get">
                        Base: <input type="number" name="base"><br>
                        Altura: <input type="number" name="altura"><br>
                        <input type="hidden" name="areas" value="4">
                        <button type="submit">Calcular</button>
                      </form>';
                if (isset($_GET['base']) && isset($_GET['altura'])) {
                    $base = floatval($_GET['base']);
                    $altura = floatval($_GET['altura']);
                    $area = $base * $altura;
                    echo "Área del Rectángulo = $area";
                }
                break;
            case 5:
                echo "Has seleccionado calcular el área del Circulo <br>";
                echo "Inserta los datos:<br>";
                echo '<form method="get">
                        Radio: <input type="number" name="radio"><br>
                        <input type="hidden" name="areas" value="5">
                        <button type="submit">Calcular</button>
                      </form>';
                if (isset($_GET['radio'])) {
                    $radio = floatval($_GET['radio']);
                    $area = pi() * pow($radio, 2);
                    echo "Área del Circulo = $area";
                }
                break;
            default:
                echo "Operación no válida.";
        }
    }
    ?>
</body>
</html>
