<?php

include("Entreprise.classe.php");



class Magasin
{

    protected $nom_m;
    protected $adresse;
    protected $code_postal;
    protected $ville;

    public function __construct($nom_m, $adresse, $code_postal, $ville)
    {
        $this->nom_m = $nom_m;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
    }


}



class Employer extends Magasin
{

    public $nom;
    public $prenom;
    protected $DateEmbauche;
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

    public function __Date($DateEmbauche)  //Fonction pour voir le nombre de temps que l'employer a travailler
    {
        date_default_timezone_set('Europe/Paris');
        echo"<br><br>Je suis un employer et je travaille chez jarditout depuis le $DateEmbauche.<br><br>";
        // var_dump($DateEmbauche);

        $date_courante = new Datetime();
        // var_dump($date_courante);
        $interval =  ($date_courante) -> diff($this->DateEmbauche)-> format('%Y');
        // var_dump($interval);
        echo $interval.' ans que je travaille pour jarditout<br>';

    }

    public function Prime()
    {
        $date_courante = new Datetime();
        $interval =  (int)($date_courante) -> diff($this->DateEmbauche)-> format('%Y');
        // var_dump($interval);                                        //Temps en entreprise
        $this-> SalaireAnnuel;
        // var_dump($this->SalaireAnnuel);
        $date_remu = new DateTime("2022-11-30");
        $date = new DateTime();

        if($date == $date_remu)
        {
        $Prime_brut = $this ->SalaireAnnuel * 0.05 + $this->SalaireAnnuel * 0.02 * $interval; 


        echo"La prime est de ".round($Prime_brut,2)." euros est elle a bien était envoyer a la banque.";
        }else
        {

            echo"la date n'es pas valide pour envoyer la prime";
        }

    }

    public function Mag()
    {
        var_dump($this->nom_m);
        echo"Bonjour je suis $this-> prenom et je travaille pour le magasin $this-> nom_m qui ce situe a $this-> ville";

    }

}

//Employer

$e_1 = new Employer("Marchat", "Andy", "2019-10-30", "Comptable", 28807, "Comptabilité");
$e_1->__Date($DateEmbauche);
$e_1->Prime();
$e_1->Mag();

$e_2 = new Employer("Croft", "Lara", "2015-09-25", "Secretaire", 26000, "Acueille/aide"); 
$e_2->__Date($DateEmbauche);
$e_2->Prime();

$e_3 = new Employer("Marchant", "Christopher", "2015-07-25", "Admin Reseaux", 36871, "Informatisien"); 
$e_3->__Date($DateEmbauche);
$e_3->Prime();

$e_4 = new Employer("Laforet", "Elfy", "2021-06-20", "Secretaire", 26000, "Acueille/aide"); 
$e_4->__Date($DateEmbauche);
$e_4->Prime();

$e_5 = new Employer("Menui", "Axel", "2018-04-24", "Logisticien", 27491, "Logistique"); 
$e_5->__Date($DateEmbauche);
$e_5->Prime();

//Magasin

$m_1 = new Magasin("Jarditout", "85 rue lefebre", "89000", "Labas");
var_dump($m_1);