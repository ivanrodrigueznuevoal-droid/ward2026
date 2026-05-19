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
        $num3 = 10;
        $valor1 = "10";

        echo "==";
        echo "<br>";
        if ($num1 == $num3) {
            echo "Los números 1 y 3 son iguales";
        }
        echo "<br>";
        if ($num1 == $valor1) {
            echo "Los números 1 y 3 son iguales";
        }
        
        echo "<br>";
        echo "<br>";

        echo "!=";
        echo "<br>";
        if ($num1 != $num2) {
            echo "Los números 1 y 2 no son iguales";
        }
        
        echo "<br>";
        echo "<br>";
        
        echo "===";
        echo "<br>";
        echo "compara el tipo de variable";
        echo "<br>";
        if ($num1 === $valor1) {
            echo "Los tipos de variables no son iguales";
        }
        echo "<br>";
        echo "<br>";

        echo "!==";
        echo "<br>";
        echo "<br>";
        if ($num1 !== $valor1) {
            echo "Los tipos de variables no son iguales";
        }
        echo "<br>";
    
    ?>
</body>
</html>
