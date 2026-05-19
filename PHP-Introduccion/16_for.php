<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $num = 5;
echo "Tabla";
echo "<br>";
        for ($i=0;$i<=10;$i++){
            echo $i . " x " . $num . " = " . $i*$num;
            echo "<br>";
        }
echo "Regresiva";        
echo "<br>";
        for ($j=10;$j>=1;$j--){
            echo $j;
            echo "<br>";
        }
echo "Pares";
echo "<br>";
        for ($k=2;$k<=10;$k++){
            if ($k%2 == 0)
                echo $k;
                echo "<br>";
        }
echo "Impares";
echo "<br>";
        for ($m=1;$m<=10;$m=$m+2){
            echo $m;
            echo "<br>";
        }

    ?>
</body>
</html>
