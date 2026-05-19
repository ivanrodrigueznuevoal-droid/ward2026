<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $num = 0;
        $respuesta = "Oporto";
        $intentos = 1;
        
        while($num <=10){
            echo $num;
            echo "<br>";
            $num++;
        }

        while ($respuesta != "Lisboa"){
            echo " intento " . $intentos;
            if ($intentos == 3){
                $respuesta = "Lisboa";
            }
            echo "<br>";
            $intentos++;
            echo $respuesta;
        }

    ?>
</body>
</html>
