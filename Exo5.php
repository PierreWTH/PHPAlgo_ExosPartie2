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

    

<form action="test.php" method="post">
Nom <br><input type="text" name="nom"><br>
Prénom <br><input type="text" name="prenom"><br>
Ville <br><input type="text" name="Ville"><br>

<?php

$nomsInput = array("Nom", "Prénom", "Ville");

function afficherInput($nomsInput){
    foreach ($nomsInput as $champs);
        echo 


    
}



?>



</form>



</body>
</html>