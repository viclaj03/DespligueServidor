<?php
$x = $_GET['x'];
$y = $_GET['y'];
$operacion = $_GET['operacion'];

echo $operacion();

function operacion($num1,$num2,$opercacion){
    echo "Hola <br/>";
    if (is_null($num1) || is_null($num2) || $opercacion != 'suma' || $opercacion != 'resta'
        || $opercacion != 'multiplicacion' || $opercacion != 'division') {
        return "Debes introducir los valores y el tipo de operacion";
    } else {
        return $opercacion($num1,$num2);
    }
}

function suma($x,$y){
    return $x + $y;
}

function resta($x,$y){
    return $x + $y;
}

function multiplicacio($x,$y){
    return $x * $y;
}

function divisio($x,$y){
    return $x / $y;
}



include('calculadora.view.php');






