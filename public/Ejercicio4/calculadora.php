<?php
require_once ("../../kernel.php");
$x = $_GET['x'];
$y = $_GET['y'];
$operacion = $_GET['operacion'];

if (is_null($x) || is_null($y) || ($operacion != 'suma' && $operacion != 'resta'
    && $operacion != 'multiplicacion' && $operacion != 'division')) {
    echo "Debes introducir los valores y el tipo de operacion";
} else {
    $resultado = operacion($x, $y, $operacion);

}
include('calculadora.view.php');


function operacion($num1, $num2, $problema){
    return $problema($num1,$num2);
}

function suma($x,$y){
    return $x + $y;
}

function resta($x,$y){
    return $x - $y;
}

function multiplicacio($x,$y){
    return $x * $y;
}

function divisio($x,$y){
    return $x / $y;
}









