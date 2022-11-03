<?php

include("Entreprise.classe.php");

class Employer
{

    public $nom;
    public $prenom;
    public $DateEmbauche;
    protected $Fonction;
    protected $SalaireAnnuel;
    public $Service;

    public function __construct($nom, $prenom, $DateEmbauche, $Fonction, $SalaireAnnuel, $Service)      //Construction de l'employer
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->DateEmbauche = $DateEmbauche;
        $this->Fonction = $Fonction;
        $this->SalaireAnnuel = $SalaireAnnuel;
        $this->Service = $Service;
    }

    public function Date()
    {
        echo"je suis un employer et je travaille chez jarditout depuis le $this->DateEmbauche";
        $debut = new DateTime('25-01-2001');
        if($DateEmbauche->Datediff($debut))
        {
            echo$DateEmbauche;
        }

    }

}

$e = new Employer("Marchat", "Andy", "30-11-2021", "Comptable", "28 807 euros", "Comptabilité");        //tableau ?
var_dump($e);

$e->Date();

var_dump($debut);

// function comparatif()
// {
//     array_column($e);
// }