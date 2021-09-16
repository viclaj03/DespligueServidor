<?php
    print_r($_GET);
    echo '<br/>';
    echo " Suma $_GET[x] + $_GET[y] = " . (($_GET['x'] + $_GET['y'])) . '<br/>';
    echo " Resta $_GET[x] - $_GET[y] = " . (($_GET['x'] - $_GET['y'])) . '<br/>';
    echo " Multiplicació $_GET[x] x $_GET[y] = " . (($_GET['x'] * $_GET['y'])) . '<br/>';
    echo " Divisió $_GET[x] / $_GET[y] = " . (($_GET['x'] / $_GET['y'])) . '<br/>';
    echo print_r($_SERVER);
?>




