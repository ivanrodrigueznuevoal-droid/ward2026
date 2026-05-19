<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php
        $num1 = 5;
        $num2 = 10;
        $num3 = 5;
        $activo1 = true;
        $activo2 = false;

        echo '$num1 = 5;<p>
        $num2 = 10;<p>
        $num3 = 5;<p>
        $activo1 = true;<p>
        $activo2 = false;';
        echo "<br>";

        echo "<br>";
        echo 'if ($num1 == 5 and $num1 == $num2){
            echo "Dentro del if";
        }<p>';
        if ($num1 == 5 and $num1 == $num2){
            echo "<b>Dentro del if</b>";
        }else{
            echo "No lo está";
        }
        echo "<br>";
        
        echo "<br>";
        echo 'if ($num1 == 5 and $num1 == $num3){
            echo "Dentro del if";
        }<p>';
        if ($num1 == 5 and $num1 == $num3){
           echo "<b>Dentro del if</b>";
        }
        echo "<br>";

        echo "<br>";
        echo 'if ($num1 == 5 || $num1 == $num2){
            echo "Dentro del if";
        }<p>';
        if ($num1 == 5 || $num1 == $num2){
            echo "<b>Dentro del if</b>";
        }else{
            echo "No lo está";
        }
        echo "<br>";

        echo "<br>";
        echo 'if ($num1 == 5 xor $num1 == $num3){
            echo "Dentro del if";
        }<p>';
        if ($num1 == 5 xor $num1 == $num3){
            echo "<b>Dentro del if</b>";
        }else{
            echo "No lo está";
        }
        echo "<br>";

        echo "<br>";
        echo 'if ($num1 == 5 xor $num1 == $num2){
            echo "Dentro del if";
        }<p>';
        if ($num1 == 5 xor $num1 == $num2){
            echo "<b>Dentro del if</b>";
        }else{
            echo "No lo está";
        }
        echo "<br>";

        echo "<br>";
        echo 'if ($activo1){
            echo "Dentro del if";
        }<p>';
        if ($activo1){
            echo "<b>Dentro del if</b>";
        }else{
            echo "No lo está";
        }
        echo "<br>";

        echo "<br>";
        echo 'if ($activo2){
            echo "Dentro del if";
        }<p>';
        if ($activo2){
            echo "<b>Dentro del if</b>";
        }else{
            echo "No lo está";
        }
        echo "<br>";
    ?>
</body>
</html>
