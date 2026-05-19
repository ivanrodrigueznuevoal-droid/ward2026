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
        $num3 = 0;


        //Asignación básica
        $num3 = $num1;
        echo '$num3 que antes valía 0, ahora vale ';
        echo "$num3.";
        echo "<br>";

        $num1 += $num2;
        echo '$num1 que antes valía 10, ahora vale la suma de $num1 + $num2 = ';
        echo $num1;
        echo "<br>";
        
    
    ?>
</body>
</html>
