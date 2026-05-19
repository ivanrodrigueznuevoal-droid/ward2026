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
        var_dump($dioses);
        echo "<br>";

        $eliminado = array_shift($dioses);
        var_dump($eliminado);
        echo "<br>";
        var_dump($dioses);
        echo "<br>";

        $eliminado = array_unshift($dioses,"Valkyria");
        var_dump($eliminado);
        echo "<br>";
        var_dump($dioses);
        echo "<br>";

        $eliminado = array_pop($dioses);
        var_dump($eliminado);
        echo "<br>";
        var_dump($dioses);
        echo "<br>";

        $eliminado = array_push($dioses, "Hulk");
        var_dump($eliminado);
        echo "<br>";
        var_dump($dioses);
        echo "<br>";

    ?>
</body>
</html>
