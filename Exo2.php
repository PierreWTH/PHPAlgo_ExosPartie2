


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
    
    <h1> Exercice 2 </h1>
    
    <p>Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>
    <h2> Résultat </h2>

    <?php

    //Définition du tableau

    $capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome");

    // ksort() pour trier les clés par ordre alphabétiques

    ksort($capitales);
    
    // Structure du tableau HTML

    echo "<table> 
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
            </tr>";

    // Boucle sur le tableau

    foreach ($capitales as $pays=>$capitale){
        echo "<tr>
                <td>$pays</td>
                <td>$capitale</td>
            </tr>";
        }
        echo "</table>";


?>

</body>
</html>


