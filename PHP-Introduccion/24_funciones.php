<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $numero1 = 5;
        $numero2 = 10;

        function sumar (){
            echo "<h1>Soy una función para sumar</h1>";
            echo "<br>";
        }
        sumar();

        function sumarnumeros ($num1, $num2){
            echo $num1 + $num2;
            echo "<br>";
        }
        sumarnumeros($numero1,-5);

        function sumarnumeroretorno ($num1, $num2){
            return $num1 + $num2;
            echo "<br>";
        }
        $resultado = sumarnumeroretorno($numero1,$numero2);
        echo $resultado;

    ?>
</body>
</html>
