<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php
        $navegadores = array("navegador1" => "Chrome", "navegador2" => "Firefox", "navegador3" => "Safari");
        $datos = array ("nombre" => "Jorge", "edad" => 45, "alumno" => true, 3 => 100);

        var_dump($navegadores);
        echo "<br>";
        var_dump($datos);
        echo "<br>";
        echo $navegadores["navegador2"]; // Imprime "Firefox"
        echo "<br>";
        echo "El navegador 2 es: " . $navegadores["navegador2"];
        echo "<br>";
        echo $datos["nombre"]; // Imprime "Jorge"
        echo "<br>";
        echo $datos[3]; // Imprime 100
        echo "<br>";
        echo $datos["alumno"] ? "Es alumno" : "No es alumno"; // Imprime "Es alumno"
    ?>
</body>
</html>
