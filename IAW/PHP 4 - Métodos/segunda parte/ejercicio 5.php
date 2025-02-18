<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Conversión de Moneda</title>
</head>
<body>
    <fieldset>
        <form method="get">
            <center><b>CONVERTIR UNA CANTIDAD DE DINERO</b><br></center>
            <br><br>
            <center>
                <input type="number" name="cantidad" placeholder="Introduce la cantidad">
                <select name="Operaciones">
                    <option value="1">Libras</option>
                    <option value="2">Dollar</option>
                    <option value="3">Shenhao</option>
                </select><br><br>
                <button type="submit">Convertir</button>
            </center>
        </form><br><br>
    </fieldset><br><br>
    <?php
    
    function conversionMoneda($cantidad, $moneda) {
        $libra = 1.22;
        $dolar = 0.75;
        $yen = 0.009;

        switch ($moneda) {
            case 1:
                echo "Has seleccionado la conversión en libras <br>";
                return $cantidad * $libra;
            case 2:
                echo "Has seleccionado la conversión en dólares <br>";
                return $cantidad * $dolar;
            case 3:
                echo "Has seleccionado la conversión en yenes <br>";
                return $cantidad * $yen;
            default:
                return "Moneda no reconocida";
        }
    }

    if (isset($_GET['cantidad']) && isset($_GET['Operaciones'])) {
        $cantidad = $_GET['cantidad'];
        $moneda = $_GET['Operaciones'];
        $resultado = conversionMoneda($cantidad, $moneda);
        echo "El resultado de convertir $cantidad a euros es: $resultado";
    }
    ?>
</body>
</html>
