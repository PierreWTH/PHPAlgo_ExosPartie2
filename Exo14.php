<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
</p>

<h2> Résultat </h2>

<?php


class Voiture{

    // Déclaration des propriétés

    private string $_marque;
    private string $_modèle;

    // Construct

    public function __construct(string $marque, string $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;

    }

    // Get et set marque 

    public function getMarque(){
        return $this->_marque;
    }
    public function setMarque(string $marque){
        $this->_marque = $marque;
    }


    // Get et set modèles

    public function getModele(){
        return $this->_modele;
    }
    public function setModele(string $modele){
        $this->_marque = $modele;
    }

    // METHODES\\



}




?>
</body>
</html>