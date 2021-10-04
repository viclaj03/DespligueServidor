<?php
$hobbie = ['futbol','Baloncest','Pintar','Otro','Sam'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['nombre'] === "" || $_POST["birthday"] === date("Y-m-d") || $_POST["birthday"] === ""
        || empty($_POST["genero"])  || $_FILES['imagen']['type'] !== 'image/jpeg' )
    {
        echo "Formulario Incompleto <br>";
        echo "<a href='formulario.php'> volver</a>";
    } else{
        $name = basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'],"imagen/$name" );
        echo "<br>Formulario Rellenado <br>" . "<br>";
        echo  "Nombre: " . $_POST['nombre'] ."<br>";
        echo  "Cumpleaños: " . $_POST['birthday'] ."<br>";
        echo  "Genero: " . $_POST['genero'] ."<br>";
        echo  "Hobbies: " . $_POST['hobbies'] ."<br>";
        echo  "<img src='imagen/$name' alt='imagen' width=\"50\" height=\"60\">" ;
    }
} else {
    require('formulario.view.php');
     }?>

