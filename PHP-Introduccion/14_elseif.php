<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

    
        $valor1 = 2;
        $valor2 = 6;

        echo "$valor1<p>
        $valor2<p>";

        if ($valor1 < $valor2){
            echo "Valor 1 menor que Valor 2";
            echo "<br>";
        }elseif ($valor1 == $valor2){
            echo "Valor 1 igual que Valor 2";
            echo "<br>";
        }else{
            echo "Valor 1 mayor que Valor 2";
            echo "<br>";
        }
echo "<br>";
        $valor3 = 2;
        $valor4 = 2;

        echo "$valor3<p>
        $valor4<p>";

        if ($valor3 < $valor4){
            echo "Valor 1 menor que Valor 2";
            echo "<br>";
        }elseif ($valor3 == $valor4){
            echo "Valor 1 igual que Valor 2";
            echo "<br>";
        }else{
            echo "Valor 1 mayor que Valor 2";
            echo "<br>";
        }
echo "<br>";
        $valor5 = 6;
        $valor6= 2;

        echo "$valor5<p>
        $valor6<p>";

        if ($valor5 < $valor6){
            echo "Valor 1 menor que Valor 2";
            echo "<br>";
        }elseif ($valor5 == $valor6){
            echo "Valor 1 igual que Valor 2";
            echo "<br>";
        }else{
            echo "Valor 1 mayor que Valor 2";
            echo "<br>";
        }
    
    
    ?>
</body>
</html>
