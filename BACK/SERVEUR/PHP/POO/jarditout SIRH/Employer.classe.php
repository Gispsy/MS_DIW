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
        $this->DateEmbauche = new DateTime($DateEmbauche);
        $this->Fonction = $Fonction;
        $this->SalaireAnnuel = $SalaireAnnuel;
        $this->Service = $Service;
    }

    public function Date()  //Fonction pour voir le nombre de temps que l'employer a travailler
    {
        date_default_timezone_set('Europe/Paris');
        echo"<br>je suis un employer et je travaille chez jarditout depuis le $this->DateEmbauche<br>";

        $date_courante = new Datetime();
        $anneesAnciennete =  (int)(($date_courante) -> diff($this->DateEmbauche))-> format('%y');
        // var_dump($anneesAnciennete);
        var_dump($anneesAnciennete);

        // if($debut)
        // {
        //     var_dump($date);
        //     var_dump($debut);
        //     $interval = $debut-> diff($date);
        //     echo $interval;

        // }else{

        //     echo"Pas de date valable";

        // }
    }

}

$e = new Employer("Marchat", "Andy", "2020-11-30", "Comptable", "28 807 euros", "Comptabilité");        //tableau ?
var_dump($e);

$e->Date();


// function comparatif()
// {
//     array($e);
// }