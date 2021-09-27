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
