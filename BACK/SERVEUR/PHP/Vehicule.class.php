<?php

class Vehicule
{
    public $_marque;
    public $_vitesseMax;
    protected $_vitesseCourante;
    private $_nbPassagers;

    public function demarrer() {
        // code permettant de démarrer l'objet instancié
    }
    public function accelerer(int $nbKm) {
        // code permettant d'accélérer
    }
    public function avancer(int $nbKm) {
        // code permettant d'avancer
    }
    public function ajouterPassager() {
        // code permettant d'ajouter un passager 
    }
}

?>