<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1> Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>

<h2> Résultat </h2>

<?php


$date = "2018-02-23";

function formaterDateFr($date){
    
    setlocale(LC_ALL, "fr_FR");
    
    $datedatetime = DateTime::createFromFormat('Y-m-d', $date);

    echo $datedatetime ->format('l d F Y');

}

formaterDateFr($date);

?>
</body>
</html>