<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php
        $num1 = 10;
        $num2 = 5;


        //SUMA
        $suma = $num1 + $num2;
        echo "La suma de $num1 + $num2 es $suma.";
        echo "<br>";

        //RESTA
        $resta = $num1 - $num2;
        echo "La resta de $num1 - $num2 es $resta.";
        echo "<br>";

        //Multiplicación
        $mult = $num1 * $num2;
        echo "La multiplicación de $num1 X $num2 es $mult.";
        echo "<br>";

        //División y módulo
        $divi = $num1 / $num2;
        $mod = $num1 % $num2;
        echo "La división de $num1 / $num2 es $divi y su resto es $mod.";
        echo "<br>";

        //Exponente
        $expo = $num1 ** $num2;
        echo "$num1 elevado a $num2 es $expo";
        
    
    ?>
</body>
</html>
