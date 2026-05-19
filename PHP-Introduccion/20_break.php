<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        for($i=1;$i<=10;$i++){
            echo "valor de i: " . $i ;
            echo "<br>";
            if ($i == 3) {
                break;
            }
        }
echo "<br>";
        for($j=1;$j<=10;$j++){
            echo "valor de j: " . $j ;
            echo "<br>";
            for($k=1;$k<=10;$k++){
                echo "valor de k: " . $k ;
                echo "<br>";
                if ($k == 3){
                    break;
                }
            }
        }

    ?>
</body>
</html>
