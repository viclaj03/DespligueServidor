<?php
    require_once("../kernel.php");
    hola;
    $greetings = 'Hola ' .$_GET['name'];
    $names = ["jj","LL"];
    $names[] = 'Pepe';
    unset($names[1]);
    require_once('../views/index.view.php');

