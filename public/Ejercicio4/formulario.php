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
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>formulario</title>
    </head>
    <body>
    <h2>Formulario</h2>
    <form method="post" action="formulario.php" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br>
        <input type="radio" id="hombre" name="genero" value="hombre">
        <label for="hombre">hombre</label><br>
        <input type="radio" id="mujer" name="genero" value="mujer">
        <label for="mujer">mujer</label><br>
        <input type="radio" id="otro" name="genero" value="otro">
        <label for="otro">otro</label> <br>
        <label for="hobbies">Elige un hobbie:</label>
        <select id="hobbies" name="hobbies">
            <?php foreach ($hobbie as $item2) {?>
                <option value="<?= $item2?>"> <?= $item2 ?></option>
            <?php }?>
        </select><br>
        <input type="file" name="imagen" id="imagen"> <br>
        <input type="submit" value="Enviar">
    </form>
    </body>
    </html>
<?php }?>
