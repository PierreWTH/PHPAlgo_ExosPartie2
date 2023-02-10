<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Exercice 12</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>

<h2> Résultat </h2>

<?php

// Définition du tableau

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));


// Définition de la fonction et boucle sur le tableau

function infoVariables($tableauValeurs){
    foreach ($tableauValeurs as $valeurs){
        var_dump($valeurs);
        echo "<br>";

    }
            
    return $valeurs;
      
}

infoVariables($tableauValeurs)



?>
</body>
</html>