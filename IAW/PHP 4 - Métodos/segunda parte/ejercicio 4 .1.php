
<?php
function pedirvalores(){
    echo '
    <form method="get">
        <input type="hidden" name="codOp"
        <input type="float" name="numero1" placeholder="Introduce el valor">
        <input type="float" name="numero2" placeholder="Introduce el valor">
        <button type="submit">Enviar Valores</button>
    </form>';
}

function suma() {
    
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $num1 = $_GET['numero1'];
        $num2 = $_GET['numero2'];
        echo "Has seleccionado la opción suma. El resultado es ";
        return $num1 + $num2;
    }
    else
    {echo "else no entra en el if";}
}

function resta() {
    
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $num1 = $_GET['numero1'];
        $num2 = $_GET['numero2'];
        echo "Has seleccionado la opción resta. El resultado es ";
        return $num1 - $num2;
    }

}

function mul() {
    
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $num1 = $_GET['numero1'];
        $num2 = $_GET['numero2'];
        echo "Has seleccionado la opción multiplicación. El resultado es ";
        return $num1 * $num2;
    }

}

function div() {
    
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $num1 = $_GET['numero1'];
        $num2 = $_GET['numero2'];
        echo "Has seleccionado la opción división. El resultado es ";
        return $num1 / $num2;
    }

}



?>