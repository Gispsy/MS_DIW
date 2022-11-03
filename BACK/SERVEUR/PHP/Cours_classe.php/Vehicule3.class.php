<?php

class Voiture 
{
    public $_marque;
    public $_modele;
    private $_nbRoues;

   // Définition du constructeur de la classe
function __construct($marque, $modele, $nbRoues, ) 
{
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_roues = $nbRoues;
}

  // [ AUTRES METHODES ]

} // -- fin de la classe

$oVoiture = new Voiture("Renault", "Clio", 2018);