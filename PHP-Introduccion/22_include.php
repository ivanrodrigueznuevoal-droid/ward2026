<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        echo "Soy el primer fichero";
        echo "<br>";
        include "22_include2.php";
        echo "<br>";
        include "22_include2.php";
        echo "<br>";
        echo "Soy el primer fichero";
        echo "<br>";
        include_once "22_include2.php";
        echo "<br>";
        include_once "22_include2.php";
    ?>
</body>
</html>
