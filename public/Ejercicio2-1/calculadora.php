<?php
require_once ("../../kernel.php");
$x = $_POST['num1'];
$y = $_POST['num2'];
$operacion = $_POST['operacion'];

if ($x === "" || $y ==="" || ($operacion != 'suma' && $operacion != 'resta'
        && $operacion != 'multiplicacion' && $operacion != 'division')) {
    $resultado = "Debes introducir los valores y el tipo de operacion";
} else {
    $resultado = operacion($x, $y, $operacion);

}
require('calculadora.view.php');


function operacion($num1, $num2, $problema){
    return $problema($num1,$num2);
}

function suma($x,$y){
    return $x + $y;
}

function resta($x,$y){
    return $x - $y;
}

function multiplicacion($x,$y){
    return $x * $y;
}

function division($x,$y){
    return $x / $y;
}