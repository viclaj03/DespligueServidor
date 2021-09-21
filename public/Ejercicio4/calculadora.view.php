<html>
<head>
    <title>calculadora</title>
</head>
<body>
<h2>Operaciones</h2>
<p>
    <?= print_r($_GET);
    echo "hola";
    echo  "suma" . suma($_GET['num1'],$_GET['num2']);
    echo operacion($_GET['num1'],$_GET['num2'],$_GET['operacion'])
    ?>
</body>
</html>