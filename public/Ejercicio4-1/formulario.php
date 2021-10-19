<?php

require ("../../kernel.php");
$hobbie = ['futbol','Baloncest','Pintar','Otro','Sam'];

use App\Alumne;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['nombre'] === "" || $_POST["birthday"] === date("Y-m-d") || $_POST["birthday"] === ""
        || empty($_POST["genero"])  || $_FILES['imagen']['type'] !== 'image/jpeg' )
    {
        echo "Formulario Incompleto <br>";
        echo "<a href='formulario.php'> volver</a>";
    } else{

        $name = basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'],"imagen/$name" );
        $newAlumno = new Alumne($_POST['dni'],$_POST['nombre'],$_POST['birthday'],$_POST['genero'],$_POST['hobbies'],$name);
        $query->insertAlumne('alumnes',$newAlumno);
        require('mostrarTabla.php');
    }
} else {
    require('formulario.view.php');
     }?>

