<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header {
            background-color: azure;
            text-align: center;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>
    <h2><?= 'Hola'.$_GET['name']?></h2>
</header>
<ul>
    <?php foreach ($names as $name){
        echo "<li>$name </li>";
    }?>
</ul>

</body>
</html>