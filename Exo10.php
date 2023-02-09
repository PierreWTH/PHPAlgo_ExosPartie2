<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1> Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit)</p>

<h2> Résultat </h2>

<?php

// Tableaux

$champs = array(
    'Nom' => 'text',
    'Prénom' => 'text',
    'Ville' => 'text',
    'Adresse Email' => 'text'
);

$nomsradio = array("Masculin", "Feminin", "Autre"
);


$formation = array("Developpeur logiciel", "Designer web", "Integrateur", "Chef de projet");


// Fonction

function afficherFormulaire($champs, $nomsradio, $formation) {
    echo '<form>';
    foreach ($champs as $nomchamps => $typechamp){
        echo '<br><label for="'.$nomchamps.'">'.$nomchamps.'</label><br>';
        echo '<input id="'.$nomchamps.'" name="'.$nomchamps.'" type="'.$typechamp.'" /><br>';
    }
    echo "</form>";
    echo "<legend> Précisez votre sexe :  </legend>";
    echo '<form>';
    foreach ($nomsradio as $genre){
        echo '<br><input type="radio" name="radio_group".>'.$genre.'</label>';
    }
    echo "<br><br>";
    echo "Quelle formation souhaitez vous rejoindre ? ";
    echo "<br><br>";
    echo "<select>";
    foreach($formation as $value){
        echo '<option value="'.strtolower($value).'">'.$value.'</option>';
    }
    echo "</select>";
    echo"</form>";
}

afficherFormulaire($champs, $nomsradio, $formation);
?>

<br><br>
<input type="submit" value="Envoyer le formulaire">

</body>
</html>