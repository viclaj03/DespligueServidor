<?php

$arrayJuagadores = csvtoarray("Atletic.csv",",");
array_multisort(array_column($arrayJuagadores, 11), SORT_ASC, $arrayJuagadores);
mostrarJugadores($arrayJuagadores);

function mostrarJugadores($jugadores){

    echo "<table >";
    foreach ($jugadores as $key => $jugador) {
        echo "<tr>";
        echo "<td>".$jugador[4]."</td>";
        echo "<td>".$jugador[7]."</td>";
        echo "<td>".$jugador[9]."</td>";
        echo "<td>".$jugador[11]."</td>";
        echo "<td>".$jugador[10]."</td>";
        echo "<td>".$jugador[17]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function csvtoarray($archivo,$delimitador){
    if(!empty($archivo) && !empty($delimitador) && is_file($archivo)) {
        $array_total = array();
        $fp = fopen($archivo, "r");
        while ($data = fgetcsv($fp, 10000, $delimitador)) {
            if ($data[1] === "Atlético de Madrid") {
                array_push($array_total, $data);
            }
        }
        fclose($fp);
        return $array_total;
    }else {
        return false;
    }
}