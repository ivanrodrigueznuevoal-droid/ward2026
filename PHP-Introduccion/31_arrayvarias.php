<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $dioses = array("Odín","Thor","Loki","Hella");
        
        $cuantos = count($dioses);
        echo "Los dioses son " . $cuantos;
        echo "<br>";

        var_dump($dioses);

        $actual = current($dioses);
        echo $actual;
        echo "<br>";

        end($dioses);

        $actual = current($dioses);
        echo $actual;
        echo "<br>";

        reset($dioses);

        $superheroes = array(0 => "Capitán América", 1 => "Iron Man", 2 => "Blackwidow", 3 => "Hulk");
        var_dump($superheroes);
        
        $clave = array_search("Iron Man",$superheroes);
        
        if ($clave){
            echo $clave . " " . $superheroes[$clave];
        }else{
            echo "Superheroe eliminado";
        }
        

    ?>
</body>
</html>
