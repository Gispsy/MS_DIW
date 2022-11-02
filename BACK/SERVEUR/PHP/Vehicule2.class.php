<?php
class Voiture
{
    public $_marque;
    public $_puissanceFiscale;
    public $_vitesseMax;
    protected $_vitesseCourante;

    public function demarrer()
    {
        echo "je démarre.<br>";
    }

    public function avancer(int $nbKm)
    {
        echo "la voiture avance de ".$nbKm." kilomètres.<br>";
    }
// Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setMarque($sMarque) 
    {
        return $this->_marque = $sMarque;
    }
    // Accesseur : renvoie la valeur d'un attribut  
    public function getMarque() 
    {
        return $this->_marque;
    }

} // -- fin de la classe Voiture

// Il nous faut d'abord instancier un objet de la classe
$oVoiture = new Voiture("Renault", "Clio", 2018);

// Ensuite seulement on peut appeler les méthodes en passant par l'objet nouvellement créé.
$oVoiture->demarrer();
$oVoiture->avancer(50);
$ovoiture->setMarque("mercedes");



?>