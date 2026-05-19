<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        $hoy = getdate();
        var_dump($hoy);

        if ($hoy["month"] == "December"){
            echo "Diciembre";
        }

    ?>
</body>
</html>
