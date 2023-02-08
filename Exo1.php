<h1> Exercice 1 </h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);Affichage(si $texte = «Mon texte en paramètre»)MON TEXTE EN PARAMETRE </p>

<h2> Résultat </h2>

<?php


function convertirMajRouge($texte) {
    $texterouge = "<font color='red'>".$texte."</font>";
    echo strtoupper($texterouge);
}

convertirMajRouge("test rouge");






