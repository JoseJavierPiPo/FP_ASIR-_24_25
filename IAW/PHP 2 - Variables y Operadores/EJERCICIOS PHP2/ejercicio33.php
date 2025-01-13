<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 33</title>
    </head>

    <body>
        <?php
       // 33. Dados los catetos de un triángulo, calcula su hipotenusa. 
        $catetoopuesto = rand(1,20);
        $catetoadyacente = rand(1,20);
        $hipotenusa = (($catetoopuesto)^2 + ($catetoadyacente)^2);
        
        echo "Dados los catetos de un triangulo los cuales son <br>";
        echo "El cateto opuesto mide $catetoopuesto cm. <br>";
        echo "El cateto adyacente mide $catetoadyacente cm. <br>";

        echo "La formula para calcularlo es c^2 = a^2 + b^2 <br>";
        echo "Por lo tanto la hipotenusa tendría un valor de  ; $catetoopuesto^2 + $catetoadyacente ^2 = " .(($catetoopuesto)^2 + ($catetoadyacente)^2) . ",<br>";
        echo "El resultado es $hipotenusa cm. ";
        ?>
    </body>
</html>


       