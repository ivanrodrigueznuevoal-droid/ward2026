<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $a1 = array("rojo","verde");
        $a2 = array("azul","amarillo");

        $unido = array_merge($a1, $a2);

        var_dump($unido);
        
    ?>
</body>
</html>
