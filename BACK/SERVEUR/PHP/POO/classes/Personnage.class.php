<?php

class Personnage
{
    public $nom;
    public $prenom;
    public $age;
    public $sexe;

    public function __construct($nom, $prenom, $age, $sexe)             //Construction 
    {
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> age = $age;
        $this -> sexe = $sexe;
    }

    public function presentation(){
        echo"<br><br>Je suis un personnage et je m'appelle $this->nom $this->prenom, j'ai $this->age et $this->sexe";
    }
}

?>