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

    // MéthodeGetInfos()

    public function getInfos(){
        echo "<br>La marque du véhicule est : ".$this->_marque. " et son modèle est : ".$this->_modele.".";
        }
}

class VoitureElec extends Voiture{ 

    private int $_autonomie;

   // Get et set autonomie

    public function getAutonomie(){
    return $this->_autonomie;
    }

    public function setAutonomie(int $autonomie){
    $this->_autonomie = $autonomie;
    } 

    // Construct

    public function __construct(string $marque, string $modele, $autonomie)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_autonomie = $autonomie;
    }
    
    // Méthode GetInfo()

    public function getInfos(){
    echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." à une autonomie de ".$this->_autonomie." kilomètres.";
    }
}

$v1 = new Voiture("Mercedes", "Classe S");
$v2 = new VoitureElec("Renault", "Zoe", 100);
$v1 -> getInfos();
$v2 -> getInfos();



?>
</body>
</html>

