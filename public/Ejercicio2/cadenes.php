<?php
$nom = $_GET['nom'];
if (is_null($nom)){
    $nom='Victor';
}
echo " Exercisi 1.C" ;
echo '<br>';
echo  trim($nom,"/") ."<br/>";
echo strlen($nom) . "<br/>";
echo strtoupper($nom) . "<br/>";
echo strtolower($nom) . "<br/>";
echo str_ireplace('o',"0",$nom) . "<br/>";
echo substr_count(strtolower($nom),"a") . "<br/>";
if (stripos($nom, "a" )){
    echo stripos($nom, "a" ) . "<br/>";
} else{
    echo "No hay a <br/>";
}

$prefix = $_GET['prefix'];

if (!is_null($prefix)){
    if (stripos($nom,$prefix) === 0){
        echo " $nom empiza por $prefix <br/>";
    } else {
        echo  "$nom no empiza por $prefix <br/>";
    }
}

echo "<br/> Exercisi 1.D <br>" ;

$url = 'http://username:password@hostname:9090/path?arg=value';
echo parse_url($url,PHP_URL_QUERY) . "<br>";
echo parse_url($url,PHP_URL_SCHEME) . "<br>";
echo parse_url($url,PHP_URL_USER) . "<br>";
echo parse_url($url,PHP_URL_PATH) . "<br>";



