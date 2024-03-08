<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado:</h2>
    <?php
    $num1 = $_POST['num1'];
    function sacarFactorial($n){
        if($n != 1){
            $n = $n * sacarFactorial($n-1);
            return $n;
        }
        else{
            return $n;
        }
    }
    $factorial = sacarFactorial($num1);
    echo $num1."! = ";
    for($i=$num1;$i>0;$i--){
        if($i>1){
            echo $i." X ";
        }
        else{
            echo $i;
        }
    }
    echo " = ".$factorial;
    echo "<p>El resultado del factorial de: $num1 es: $factorial</p>";
    ?>

</body>
</html>
