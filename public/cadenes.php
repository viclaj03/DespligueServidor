<?php
$nom = $_GET['nom'];
if (is_null($nom)){
    $nom='/Victor Lajara Andreu/';
}
echo $nom ;
echo '<br>';
echo  trim($nom,"/");


