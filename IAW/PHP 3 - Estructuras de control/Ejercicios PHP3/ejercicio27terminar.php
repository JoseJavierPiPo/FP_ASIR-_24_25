<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 27</title>
    </head>
   
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


        <form method="get">
            <input type="float" name="basea" placeholder="Introduce el valor">
            <input type="float" name="baseb" placeholder="Introduce el valor">
            <input type="float" name="h" placeholder="Introduce el valor">
            <button type="submit">Enviar Valores</button>
        </form>;
        $basea = floatval($_GET['basea'] ?? 0)
        $baseb = floatval($_GET['baseb'] ?? 0)
        $h = floatval($_GET['h'] ?? 0)
        $area = (($basea + $baseb) * h) /2;
            









    <body>
    <?php
    //27. Elaborar un programa que permita calcular diferentes tipos de áreas: trapecio, triángulo, 
    //cuadrado, rectángulo o círculo, en caso contrario indicar que no es una figura geométrica válida. Se le 
    //indicará al programa el área a calcular. 
    $areas = floatval($_GET['areas'] ?? 0);
        switch($areas){
            case 1: 

                    echo "Has seleccionado calcular el área del Trapecio <br>";
                    echo "Inserta los datos ;<br>";
                
                    echo '
                        <form method="get">
                            <input type="float" name="basea" placeholder="Introduce el valor">
                            <input type="float" name="baseb" placeholder="Introduce el valor">
                            <input type="float" name="h" placeholder="Introduce el valor">
                            <button type="submit">Enviar Valores</button>
                        </form>';

                    if(isset($_GET['basea']) && isset($_GET['baseb']) && isset($_GET['h'])){
                            $basea = floatval($_GET['basea'] ?? 0);
                            $baseb = floatval($_GET['baseb'] ?? 0);
                            $h = floatval($_GET['h'] ?? 0);
                            $areat = (($basea + $baseb) * $h) /2;
                            echo "El Área del Trapecio es $areat cm^2 <br>";
                    };

                break;

            case 2: 
                    echo "Has seleccionado calcular el área del Triangulo <br>";
                    echo "Inserta los datos ;<br>";
            
                    echo "Área de el Triangulo = base x  h(altura) / 2 <br>";
                    echo '
                        <form method="get">
                            <input type="float" name="base" placeholder="Introduce el valor">
                            <input type="float" name="h" placeholder="Introduce el valor">
                            <button type="submit">Enviar Valores</button>
                        </form>';

                    if(isset($_GET['basea']) && isset($_GET['h'])){
                            $basea = floatval($_GET['basea'] ?? 0);
                            $h = floatval($_GET['h'] ?? 0);
                            $areatri = ($base * $h) /2;
                            echo "El Área del Triangulo es $areatri cm^2 <br>";
                    };
                break;

            case 3: 
            
                echo "Has seleccionado calcular el área del Cuadrado <br>";
                echo "Área de el Cuadrado = lado x lado  <br>";
                echo "Inserta los datos ;<br>";
                    echo "Inserta los datos ;<br>";
            
                    
                    echo '
                        <form method="get">
                            <input type="float" name="base" placeholder="Introduce el valor">
                            <input type="float" name="h" placeholder="Introduce el valor">
                            <button type="submit">Enviar Valores</button>
                        </form>';

                    if(isset($_GET['basea']) && isset($_GET['h'])){
                            $basea = floatval($_GET['basea'] ?? 0);
                            $h = floatval($_GET['h'] ?? 0);
                            $areatri = ($base * $h) /2;
                            echo "El Área del Triangulo es $areatri cm^2 <br>";
                    };
                
            ;break;

            case 4: 

                echo "Has seleccionado calcular el área del Rectángulo <br>";
                echo "Inserta los datos ;<br>";
            
                echo "Área de el Rectangulo = base x h altura <br>";

            ;break;

            case 5: 

                echo "Has seleccionado calcular el área del Circulo <br>";
                echo "Inserta los datos ;<br>";
            
                echo "Área de el Circulo =  π × r^2 <br>";
                
            ;break;

        
        }
    
    ?>
</body>
</html>