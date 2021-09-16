<?php

$x = $_GET['x'];
$y = $_GET['y'];
$suma = $x + $y;
$resta = $x - $y;
$division = $x / $y;
$multiplicacion = $x * $y;

include('../../views/calculadora.view.php')
?>
