<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<body>
<h1> Exercice 4 </h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<h2> Résultat </h2>



<?php

// Définition du tableau

  $capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome");

// Structure tu tableau HTML

    echo "<table> 
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien Wiki</th>
            </tr>";

// Boucle sur le tableau

    foreach ($capitales as $pays=>$capitale){


        echo "<tr>
                <td>$pays</td>
                <td>$capitale</td>
                <td><a href=https://fr.wikipedia.org/wiki/" . $capitale .">Lien</a></td>
            </tr>";
        }
echo "</table>";



?>

</body>
</html>