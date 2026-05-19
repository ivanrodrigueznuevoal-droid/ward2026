<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

        var_dump($dias);
        echo "<br>";

        asort ($dias);
        echo "<b>asort ordena el array manteniendo las keys</b>";
        var_dump($dias);
        echo "<br>";

        ksort ($dias);
        echo "<b>ksort ordena las keys</b>";
        var_dump($dias);
        echo "<br>";

        sort ($dias);
        echo "<b>sort ordena el array sin mantener las keys</b>";
        var_dump($dias);
        echo "<br>";

        rsort ($dias);
        echo "<b>rsort ordena el array en orden inverso sin mantener las keys</b>";
        var_dump($dias);
        echo "<br>";

        shuffle($dias);
        echo "<b>shuffle baraja el array</b>";
        var_dump($dias);
        echo "<br>";
        

    ?>
</body>
</html>
