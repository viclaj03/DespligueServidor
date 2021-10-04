<?php
require ("Player.php");
require ("Team.php");
$juagadores = csvtoClass("Atletic.csv",",");
$equipo = new Team("Atletico del Madrid",$juagadores,"","","","","");

function csvtoClass($archivo,$delimitador){
    if (!empty($archivo) && !empty($delimitador) && is_file($archivo)) {
        $array_total = array();
        $fp = fopen($archivo, "r");
        while ($data = fgetcsv($fp, 10000, $delimitador)) {
            if ($data[1] === "Atlético de Madrid") {
                $jugador= new Player($data[4],$data[6],$data[9],$data[11],$data[10],$data[17],$data[12],$data[16],$data[18],$data[19]);
                array_push($array_total, $jugador);
            }
        }
        fclose($fp);
        return $array_total;
    } else {
        return false;
    }
}
require ("equipo.view.php");
