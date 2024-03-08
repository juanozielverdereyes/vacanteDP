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
    $num1 = $_POST['num1'];//se obtiene el valor ingresado en el formulario de archivo index
    function sacarFactorial($n){//esta función nos apoya en sacar realizando un ciclo de multiplicación que se detiene al llegar al valor 1
        if($n != 1){//condición si el valor es mayor a 1
            $n = $n * sacarFactorial($n-1);// se multiplica el valor actual de la función por el factorial de la misma función menos 1
            return $n;//regresa valor del producto de multiplicar al valor actual por lo que devuelve la función llamada
        }
        else{//condición si el valor no es mayor a 1
            return $n;//regresa el valor 1 para detener el ciclo
        }
    }
    $factorial = sacarFactorial($num1);//Se inicia la función ciclica
    echo $num1."! = ";//inicio del texto de la cuenta realizada
    for($i=$num1;$i>0;$i--){//ciclo descendente donde escribe el valor de "i" seguido de una "x" y en el caso de llegar a cero solo devurlve valor de i
        if($i>1){
            echo $i." X ";
        }
        else{
            echo $i;
        }
    }
    echo " = ".$factorial;//fin de txto de la cuenta realizada
    echo "<p>El resultado del factorial de: $num1 es: $factorial</p>"; //mensaje con el resultado de factorial
    ?>

</body>
</html>
