<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1> Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.</p>

<h2> Résultat </h2>

<?php

// Manque la verification de la case cochée \\

// Définition du tableau

$elements = array(
    'checkbox1' => 'Choix 1',
    'checkbox2' =>'Choix 2',
    'checkbox3' => 'Choix 3',
);

// Définiton de la fonction et boucle sur le HTML

function afficherInput($elements) {
    echo '<form>';
    foreach ($elements as $type => $choix){
        echo '<br><input type="checkbox" name".>'.$choix.'</label>';
       

    }
}

afficherInput($elements)


?>
</body>
</html>