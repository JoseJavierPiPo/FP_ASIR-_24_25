<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 35</title>
    </head>
        <form method="get">
            <input type="number" name="primer" placeholder="Introduce Primer Trimestre"><br>
            <input type="number" name="segundo" placeholder="Introduce Segundo Trimestre"><br>
            <input type="number" name="tercer" placeholder="Introduce Tercer Trimestre"><br>
            <button type="submit" name="enviar">Introducir Datos</button>
        </form><br>

    <body>
        <?php
        //35 Los porcentajes de cada uno de los trimestres de matemáticas para este nuevo curso serán
        // Los porcentajes de cada uno de los trimestres de matemáticas para este nuevo curso serán
        // 20%, 50% y 30% respectivamente. Realiza un programa que calcule la nota final de un alumno,
        // aplicando estos porcentajes, a partir de sus notas parciales.
        
        $nota1 = $_GET['primer'];
        $nota2 = $_GET['segundo'];
        $nota3 = $_GET['tercer'];
        
        $primertrimestre = 0.2 * $nota1;
        $segundotrimestre = 0.5 * $nota2;
        $tercertrimestre = 0.3 * $nota3;

        $notatotal= ($primertrimestre + $segundotrimestre + $tercertrimestre);

        echo "Las notas son las siguientes; <br>";
        echo "Primer trimestre $nota1 .<br>";
        echo "Segundo trimestre $nota2 .<br>"; 
        echo "Tercer trimestre $nota3 .<br>";
        
        echo "Tras hacer los calculos la nota media es de $notatotal ";
        ?>
    </body>
</html>

