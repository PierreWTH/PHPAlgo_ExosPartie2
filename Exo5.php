<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice 5 </h1>

    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.</p>

    <h2> Résultat </h2>

<?php

// Définition du tableau

$champs = array(
    'Nom' => 'text',
    'Prénom' => 'text',
    'Ville' => 'text'
);

// Définition de la fonction et boucle sur le HTML


function afficherInput($champs) {
    echo '<form>';
    foreach ($champs as $nomchamps => $typechamp){
        echo '<br><label for="'.$nomchamps.'">'.$nomchamps.'</label><br>';
        echo '<input id="'.$nomchamps.'" name="'.$nomchamps.'" type="'.$typechamp.'" /><br>';
    }
}

afficherInput($champs);

?>



</form>



</body>
</html>