<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php
        //Variables
        $edad = 45;
        $estatura = 1.90;
        $nombre = "Jorge";
        $frase1 = "$nombre tiene $edad años y mide $estatura metros";
        $frase2 = '$nombre tiene $edad años y mide $estatura metros';
        $profesor = true;
        $alumno = false;

        echo $edad;
        echo "<br>";
        echo $estatura;
        echo "<br>";
        echo "Tú nombre es " . $nombre;
        echo "<br>";
        echo $frase1;
        echo "<br>";
        echo $frase2;
        echo "<br>";
        echo $profesor;
        echo "<br>";
        echo json_encode($alumno);
    ?>
</body>
</html>
