<html>
<head>
    <title>calculadora</title>
</head>
<body>
<p>
    <?= print_r($_GET);
    echo '<br/>';
    echo " Suma: $x + $y = $suma"  . '<br/>';
    echo " Resta: $x - $y = $resta" . '<br/>';
    echo " Multiplicacion: $x x $y = $multiplicacion" . '<br/>';
    echo " Division: $x / $y = $division" . '<br/>';
    echo print_r($_SERVER);?>
</p>
<p><?php print_r($_SERVER['SERVER_ADDR'])?></p>
<p><?php print_r($_SERVER['QUERY_STRING'])?></p>
<p><?php print_r($_SERVER['SCRIPT_FILENAME'])?></p>

</body>
</html>