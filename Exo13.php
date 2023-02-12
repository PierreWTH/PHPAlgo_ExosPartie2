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
    private int $_vitesseActuelle = 0;
    private bool $_demarrer = False;
    public static int $_count = 0;

    // Déclaration des méthodes

    //Construct

    public function __construct(string $marque, string $modele, int $nbportes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbportes = $nbportes;
        Voiture::$_count++;

    }

    // Get et set marque

    public function getMarque(){
        return $this->_marque;
    }
    public function setMarque(string $marque){
        $this->_marque = $marque;
    }

    // Get et set modele

    public function getModele(){
        return $this->_modele;
    }
    public function setModele(string $modele){
        $this->_marque = $modele;
    }

    // Get et set nbportes

    public function getNbportes(){
        return $this->_nbportes;
    }
    public function setNbportes(int $nbportes){
        $this->_marque = $nbportes;
    }

    //METHODES\\

        //Méthode demarrer

    public function demarrer()
    {
        if ($this->_demarrer == true)
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." est déja en marche <br><br>";
        }
        else
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." démarre <br><br>";
        }
        $this->_demarrer = true;
    
    }
    
        // Méthode accelerer

    public function accelerer(int $vitesse)
        
    {   if ($this->_demarrer == true)
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." accèlere de " .$vitesse. " km/h <br>";
            $this->_vitesseActuelle = $vitesse;
        }
        else
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." veut accèlerer de " .$vitesse. " km/h. <br>";
            echo "<br>Pour accélerer, il faut démarrer le véhicule " .$this->_marque. " ".$this->_modele. "";
        }
    }
    
        // Méthode stopper

    public function stopper()
    {
        if ($this->_demarrer == false)
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." est déja à l'arret ! ";
        }    
        else
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." est stoppé";
            $this->_demarrer = false;
        }
        
    }

        //Méthode vitesse actuelle

    public function vitesseActuelle()
    {
        echo "<br>La vitesse du véhicule ".$this->_marque. " ".$this->_modele." est de " .$this->_vitesseActuelle. " km/h.";
    }


        //Méthode Afficher informations

    public function afficherInformations(){   

        echo "Info véhicule : ".Voiture::$_count;
        echo "<br>*****************";
        echo "<br>Nom et modèle du véhicule : ".$this->_marque. " ".$this->_modele;
        echo "<br>Nombre de portes : ".$this->_nbportes;

        if ($this->_demarrer == False)
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." est à l'arret !";
        }    
        else
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." est démarré";
            $this->_demarrer = false;
        }
        
        echo "<br>Sa vitesse actuelle est de " .$this->_vitesseActuelle." km/h.<br><br>";
    

    }


    public function ralentirVitesse(int $nbkm)
    {
        if ($this->_vitesseActuelle <= 0)
        {
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." ne peux pas ralentir car il est déja à l'arret !";
        }    

        if ($nbkm > $this->_vitesseActuelle)
        {
            echo "<br>Le véhicule ne peux pas ralentir plus qu'il accèlère ! ";
        }    
        else
        {
            $this->_vitesseActuelle = $this->_vitesseActuelle - $nbkm;
            echo "<br>Le véhicule ".$this->_marque. " ".$this->_modele." ralentit de " .$nbkm. "km/h";
            echo "<br>Il est maintenant a une vitesse de " .$this->_vitesseActuelle. " km/h";
        
        }
        
    }

}   

// Déclaration des instances

$v1 = new Voiture("Bugatti", "Chiron", 3);
$v1->demarrer();
$v1->accelerer(30);
$v1->afficherInformations();

$v2 = new Voiture("Fiat", "Panda", 5);
$v2->afficherInformations();

$v3 = new Voiture("Toyota", "Yaris", 5);
$v3->afficherInformations();

?>
</body>
</html>