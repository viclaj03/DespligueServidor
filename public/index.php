<?php
    require_once("../kernel.php");
    $greetings = 'Hola ' .$_GET['name'];
    $names = ["jj","LL"];
    $names[] = 'Pepe';
    unset($names[1]);
    require_once('../views/index.view.php');

