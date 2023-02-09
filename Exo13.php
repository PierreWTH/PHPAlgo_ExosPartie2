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

<h1> Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. 
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture</p>

<h2> Résultat </h2>

<?php
/*

Propriétés : variable appartenant a une classe
Méthode : fonction appartenant a une classe
*/

class Voiture{

    // Déclaration des propriétés

    private string $_marque;
    private string $_modele;
    private int $_nbportes;
    private int $_vitesseActuelle;
    private string $_etat;

    // Déclaration des méthodes

        //Construct

    public function __construct(string $marque, string $modele, int $nbportes, int $vitesseActuelle, string $etat){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbportes = $nbportes;
        $this->_vitesseActuelle = $vitesseActuelle;
        $this->_etat = $etat;

    }

        //Méthodes

    public function demarrer(){
        echo "La voiture" .$this->marque ." ". $this->modele . "démarre";
    }
    
    public function accelerer()
    {
        $this -> vitesseActuelle += $vitesse;
    }
    
    public function stopper()
    {
        return $this -> etat;
        
    
    }

}


$mavoiture = new Voiture("Toyota", "Aygo");
$mavoiture->demarrer();
echo $mavoiture


?>
</body>
</html>