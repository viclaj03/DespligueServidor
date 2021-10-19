<!DOCTYPE html>
<html lang="en">
<head>
    <title>formulario</title>
</head>
<body>
<h2>Formulario</h2>
<form method="post" action="formulario.php" enctype="multipart/form-data">
    <label for="dni">Dni:</label>
    <input type="text" id="dni" name="dni"><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday"><br>
    <input type="radio" id="hombre" name="genero" value="H">
    <label for="hombre">hombre</label><br>
    <input type="radio" id="mujer" name="genero" value="M">
    <label for="mujer">mujer</label><br>
    <input type="radio" id="otro" name="genero" value="O">
    <label for="otro">otro</label> <br>
    <label for="hobbies">Elige un hobbie:</label>
    <select id="hobbies" name="hobbies">
        <?php foreach ($hobbie as $key=> $item2) {?>
            <option value="<?= $key?>"> <?= $item2 ?></option>
        <?php }?>
    </select><br>
    <input type="file" name="imagen" id="imagen"> <br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
