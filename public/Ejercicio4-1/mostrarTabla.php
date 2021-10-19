<?php


require ("../../kernel.php");

    $alumnos = $query->findAll("alumnes");

echo '<table border="1px solid black" ">
  <tr>
    <th>Dni</th>
    <th>Nombre</th>
    <th>Nacimiento</th>
    <th>Sexe</th>
    <th>Hoby</th>
    <th>foto</th>
  </tr>';
    foreach ($alumnos as $alumno) {
        echo "<tr>";
        echo "<td>$alumno->dni</td>";
        echo "<td>$alumno->Nom</td>";
        echo "<td>$alumno->DataDeNaixement</td>";
        echo "<td>$alumno->Sexe</td>";
        echo "<td>$alumno->Hobby</td>";
        if ($alumno->Foto === null){
            echo '<td><img src="https://cache.desktopnexus.com/thumbseg/2294/2294267-bigthumbnail.jpg" alt="error" width="50" height="60" ></td> </tr>';
        } else{

            echo '<td><img src="imagen/' .$alumno->Foto . '" alt="imagen" width="50" height="60" ></td> </tr>';
        }
    }
echo '</table>';
    echo "<a href='formulario.php'> Añadir alumno</a>";

