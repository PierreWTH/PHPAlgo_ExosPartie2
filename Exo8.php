<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1> Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran..</p>

<h2> Résultat </h2>

<?php

$url = "<img src=http://my.mobirise.com/data/userpic/764.jpg>";

// Fonction avec boucle while

function repeterImage($url, $nombre){
    while ($nombre > 0){
    echo $url;
    --$nombre; 

    }
}

repeterImage($url, 12)

?>
</body>
</html>