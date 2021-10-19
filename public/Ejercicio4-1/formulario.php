<?php

require ("../../kernel.php");
$hobbie = ['futbol','Baloncest','Pintar','Otro','Sam'];

use App\Alumne;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if( $_POST['dni'] === "" ||$_POST['nombre'] === "" || $_POST["birthday"] === date("Y-m-d") || $_POST["birthday"] === ""
        || empty($_POST["genero"])   )
    {
        echo "Formulario Incompleto <br>";
        echo "<a href='formulario.php'> volver</a>";
    } else{
        $name = basename($_FILES['imagen']['name']);
       if ($_FILES['imagen']['type'] !== 'image/jpeg'){
           $name = null;
       }
        move_uploaded_file($_FILES['imagen']['tmp_name'],"imagen/$name" );
        $newAlumno = new Alumne($_POST['dni'],$_POST['nombre'],$_POST['birthday'],$_POST['genero'],$_POST['hobbies'],"imagen/" . $name);
        $query->insertAlumne('alumnes',$newAlumno);
        echo "Alumno añadido";
        echo "<a href='mostrarTabla.php'> Ver tablas</a>";


    }
} else {
    require('formulario.view.php');
     }?>

