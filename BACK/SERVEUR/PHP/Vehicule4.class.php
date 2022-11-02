<?php

class Vehicule
{
    public $_marque;
    public $_vitesseMax;
    protected $_vitesseCourante;
    private $_nbPassagers;

    public function __construct ($marque, $vMax = 200, $nbPassagers = 0) {
        $this->_marque = $marque;
        $this->_vitesseMax = $vMax;
        $this->_vitesseCourante = 0;
        $this->_nbPassagers = $nbPassagers;
    }

    public function demarrer() {
        // code permettant de démarrer l'objet instancié
    }

    // ...
}

// Instanciation d'un vehicule
$maVoitureDeFonction = new Vehicule("Lotus", 220, 1);

?>