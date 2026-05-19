<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php

        $valor1 = 10;
        $valor2 = 25;
        
        function prueba (){
            global $valor1, $valor2;
            $valor = $valor1 + $valor2;
            echo $valor;
        }

        prueba ();
    
    ?>
</body>
</html>
