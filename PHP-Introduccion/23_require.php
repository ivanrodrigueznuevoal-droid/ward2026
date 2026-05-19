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
        require "23_require2.php";
        echo "<br>";
        require "23_require2.php";
        echo "<br>";
        echo "Soy el primer fichero";
        echo "<br>";
        require_once "23_requires2.php"; //provocamos fallo
        echo "<br>";
        require_once "23_require2.php";
    ?>
</body>
</html>
