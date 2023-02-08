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

  $capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome");

// $liens = array(
//     "Paris"=> '<a href="https://fr.wikipedia.org/wiki/Paris"target="_blank">Lien</a>',
//     "Berlin"=> '<a href="https://fr.wikipedia.org/wiki/Berlin"target="_blank">Lien</a>',
//     "Washington"=> '<a href="https://fr.wikipedia.org/wiki/Washington_(district_de_Columbia)"target="_blank">Lien</a>',
//     "Rome"=> '<a href="https://fr.wikipedia.org/wiki/Rome"target="_blank">Lien</a>'
// );
    // echo $capitales["France"];
    
// $lien = "<a href='https://example.com'>Website</a>";
// $lien = "<a href=https://fr.wikipedia.org/wiki/" . $capitale .">Plop</a>";
// echo $lien;

    echo "<table> 
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien Wiki</th>
            </tr>";

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