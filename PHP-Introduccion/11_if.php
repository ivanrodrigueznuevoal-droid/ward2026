<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php
        $nota1 = 2;
        $nota2 = 8;
        $nota3 = 5;

        echo '$nota1 = 2;<p>
        $nota2 = 8;<p>
        $nota3 = 5;<p>';

        echo "<br>";
        echo 'Nota 1<br>';
        if ($nota1 >= 5){
            echo "Aprobado";
            if ($nota1 >= 8){
                echo ", estás hecho un máquina";
            }
        }else{
            echo "Suspenso";
            if ($nota1 <= 2){
                echo ", estas jodido";
            }
        }

        echo "<br>";
        echo 'Nota 2<br>';
        if ($nota2 >= 5):
            echo "Aprobado";
        else :
            echo "Suspenso";
        endif;

        echo "<br>";
        echo 'Nota 3<br>';
        if ($nota3 >= 5){
            echo "Aprobado";
            if ($nota3 >= 8){
                echo ", estás hecho un máquina";
            }
        }else{
            echo "Suspenso";
            if ($nota3 <= 2){
                echo ", estas jodido";
            }
        }

        echo "<br>";
        if ($nota1 >= 5 && $nota2 >= 5 && $nota3 >=5){
            echo "Has aprobado el curso";
        }else{
            echo "Debes recuperar";
        }

    ?>
</body>
</html>
