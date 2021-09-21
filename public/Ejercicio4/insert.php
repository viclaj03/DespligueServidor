<?php
    function insert($tabla, $array){
        $sql_sentecia = "insert into '%s' ('%s') values('%s') ";
        $nombre = implode(",",array_key($array));
        $valores = implode(",",$array);
        echo sprintf($sql_sentecia,$tabla,$nombre,$valores);
    }
