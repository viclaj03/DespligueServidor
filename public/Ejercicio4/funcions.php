<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (contrasenyaSegura($_POST['pwd'])){
        echo "contraseña valida";
    } else{
        echo "Contraseña no valida";
    }

}

function contrasenyaSegura($contrasenya){
    if (longitud($contrasenya) && hayMayusculas($contrasenya) && hayMinusculas($contrasenya) &&
        haynumeros($contrasenya) && haycarcateres($contrasenya) ){
        return true;
    }
    return false;
}


function longitud($palabra){
    if (strlen($palabra)>=8){
        return true;
    }
    return false;
}

function hayMayusculas($palabra){
    if(preg_match('`[A-Z]`',$palabra)){
        return true;
    }
    return false;
}

function hayMinusculas($palabra){
    if(preg_match('`[a-z]`',$palabra)){
        return true;
    }
    return false;
}

function haynumeros($palabra){
    if(preg_match('`[0-9]`',$palabra)){
        return true;
    }
    return false;
}

function haycarcateres($palabra){
    if(preg_match('`[-_=#+$@*]`',$palabra)){
        return true;
    }
    return false;
}
