<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $array1 = array(1,2,3,4);
        $valores = array("uno" => 1, "dos" => 2, "tres" => 3, "cuatro" => 4);

        foreach($array1 as $valor){
            echo $valor;
            echo "<br>";
        }

        foreach($valores as $k => $v){
            echo "valores[$k] => $v";
            echo "<br>";
        }

    ?>
</body>
</html>
