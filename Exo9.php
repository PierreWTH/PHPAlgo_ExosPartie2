<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1> Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")</p>

<h2> Résultat </h2>

<?php

$nomsradio = array("Masculin", "Feminin", "Autre"
);

function afficherRadio($nomsradio) {
    echo '<form>';
    foreach ($nomsradio as $genre){
        echo '<br><input type="radio" name="radio_group".>'.$genre.'</label>';
       

    }
}

afficherRadio($nomsradio)






?>
</body>
</html>