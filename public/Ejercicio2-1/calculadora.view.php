<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>
<form method="post" action="calculadora.php">
    <label for="num1"> numero 1</label><br>
    <input type="number" name="num1" id="num1"><br>
    <label for="num2"> numero 2</label><br>
    <input type="number" name="num2" id="num2"><br>
    <label for="operacion"></label>
    <select id="operacion" name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
    </select>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
