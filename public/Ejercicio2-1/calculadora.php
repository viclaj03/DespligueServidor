<?php
require_once ("../../kernel.php");

require('calculadora.view.php');

if(isset($_POST['num1']) || isset($_POST['num2'])){
    $x = $_POST['num1'];
    $y = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if ($x === "" || $y ==="" || ($operacion != 'suma' && $operacion != 'resta'
            && $operacion != 'multiplicacion' && $operacion != 'division')) {
        echo "Debes introducir los valores y el tipo de operacion";
    } else {
        echo  operacion($x, $y, $operacion);

    }
}

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