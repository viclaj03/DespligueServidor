<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 3</title>
</head>
<body>
<?php
    $nombres = ['Zacarias','Alvaro','Pepito','Victor'];

    /*Mostra el nombre d'elements que té l'array (funció **count**)*/
    echo count($nombres) . '<br/>';
    /* Crea una cadena que continga els noms existents en l'array
    separats per un espai i mostra-la (funció de strings **implode**)*/
    echo implode(" ",$nombres) . '<br/>';
    /* Mostra l'array ordenat alfabèticament (funció **asort**)*/
    asort($nombres);
    echo implode(" ",$nombres) . '<br/>';
    /* Mostra l'array en l'ordre invers al que es va crear (funció **array_reverse**)*/
    print_r(array_reverse($nombres));
    echo '<br/>';
    /* Mostra la posició que té el teu nom en l'array (funció **array_search**)*/
    echo  array_search("Victor",$nombres) . '<br/>';
    /* Per a imprimir un array crea un funció (**mostrar_array**) que els mostre com una llista.*/
    mostrar_array($nombres);
    function mostrar_array(array $lista){
        foreach ($lista as $nombre){
            echo $nombre . '<br/>';
        }
    }
    /* Crea un array d'alumnes on cada element siga un altre array que continga el dni, nom i edat de l'alumne.*/

    $alumnes = ['alumne1'=>['dni'=> '548544f','nom'=>'Victor','edad'=>23],
        'alumne2'=>['dni'=> '8985423l','nom'=>'Juanjo','edad'=>89],
        'alumne3'=>['dni'=> '898754h','nom'=>'Maria','edad'=>22]];

    ?>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
        <?php
    foreach ($alumnes as $alumne){?>
        <tr>
            <?php
            foreach ($alumne as $dato){?>
            <td><?php echo $dato ?></td>
            <?php
        }?>
        </tr>
    <?php } ?>
    </table>
    <?php
        /* Utilitza la funció **array_column** per a obtenir un array indexat que continga únicament
         els noms dels alumnes i mostra-ho per pantalla.*/
    $nombresAlumnes =  array_column($alumnes,'nom');
    echo implode(" ",$nombresAlumnes) . '<br/>';
    /* Mostra per pantalla 10 paraules en anglés i la seua traducció. Les paraules han d'estar distribuides
    en dos columnes.  Les paraules i les traduccions estaràn en un array associatiu.*/
    $paraules = array('queso' => 'cheese', 'ajedrez' => 'Chess', 'ciudad'=>'town', 'caballo'=>'horse','bici'=>'bike'
    ,'silla'=>'chair','coche'=>'car','manzana'=> 'apple','zorro'=>'fox','pelicula'=>'movie' );

    foreach($paraules as $Spanish => $English){
        echo "$English = $Spanish" . '<br/>';
    }
    ?>


</body>
</html>
