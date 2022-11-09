<?php

class Magasin
{

    private $nom_m;
    private $adresse;
    private $code_postal;
    private $ville;
    private $resto;

    public function __construct($nom_m, $adresse, $code_postal, $ville, $resto)
    {
        $this->nom_m = $nom_m;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->resto = $resto;
    }

    public function getNom_m()
    {
        return $this->nom_m;
    }
    
    public function getVille()
    {
        return $this->ville;
    }

    public function getResto()
    {
        return $this->resto;
    }
}

class Enfant 
{
    private $age;

    public function __construct($age_e)
    {
        $this->age = $age_e;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Employer 
{

    private $nom;
    private $prenom;
    private $DateEmbauche;
    private $Fonction;
    private $SalaireAnnuel;
    private $Service;
    private $nombre_enfant;
    private Enfant $enfant;
    private Magasin $magasin;

    public function __construct($nom, $prenom, $DateEmbauche, $Fonction, $SalaireAnnuel, $Service, $nombre_enfant, Magasin $mag, Enfant $age_e)      //Construction de l'employer
    {
        
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->DateEmbauche = new DateTime($DateEmbauche);
        $this->Fonction = $Fonction;
        $this->SalaireAnnuel = $SalaireAnnuel;
        $this->Service = $Service;
        $this->nombre_enfant = $nombre_enfant;
        $this->enfant = $age_e;
        $this->magasin = $mag;
    }

    public function __Date()  //Fonction pour voir le nombre de temps que l'employer a travailler
    {
        date_default_timezone_set('Europe/Paris');
        // var_dump($this-> DateEmbauche);
        echo"<br><br>Je suis un employer et je travaille chez ".$this->magasin->getNom_m(). " depuis le ".$this->DateEmbauche->format('d-m-Y')."<br><br>";
        // var_dump($DateEmbauche);

        $date_courante = new Datetime();
        // var_dump($date_courante);
        $interval =  ($date_courante) -> diff($this->DateEmbauche)-> format('%Y');
        // var_dump($interval);
        echo $interval.' ans que je travaille pour jarditout <br>';

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
        }else{
        
            echo"la date n'es pas valide pour envoyer la prime la bonne date est le 30-11 de chaque année.<br>";
        }

    }

    public function Mag()
    {
        //var_dump($this->nom_m);
        echo"<br>Bonjour je suis ".$this->prenom." et je travaille pour le magasin ".$this->magasin->getNom_m()." qui se situe a ".$this->magasin->getVille().".";

    }

    public function resto()
    {
        echo"<br>Le magasin ".$this->magasin->getNom_m()." a comme moyen de restauration un ".$this->magasin->getResto().".<br>";
    }

    public function cheque_vacance()
    {
        $date_courante = new Datetime();
        $interval =  ($date_courante) -> diff($this->DateEmbauche)-> format('%Y');

        if($interval >= 1){
            echo$this->prenom." a le droit a des cheques de vacances";

        }else {

            echo$this->prenom." n'a pas assez d'anciennete pour avoir des cheques de vacances";
        }
    }

    public function Nbenfant()
    {
        echo"<br>J'ai ".$this->nombre_enfant." enfant.<br>";
    }

    public function Cheque_Noel()
    {
        if($this->nombre_enfant >= 1)
        {
            
            if($this->enfant->getAge() <= 10)
            {
                echo"Vue que l'enfant a ".$this->enfant->getAge()." ans vous avez le droit a 20 euros de cheque pour noel<br>";
            }
            if($this->enfant->getAge() >10 && $this->enfant->getAge() <=15)
            {
                echo"Vue que l'enfant a ".$this->enfant->getAge()." ans vous avez le droit a 30 euros de cheque pour noel<br>";
            }
            if($this->enfant->getAge() >15 && $this->enfant->getAge() <=18)
            {
                echo"Vue que l'enfant a ".$this->enfant->getAge()." ans vous avez le droit a 50 euros de cheque pour noel<br>";
            }

        }else{

            echo"Pas de cheque cadeau car pas d'enfant.";
        }
    }
}


//Employer

$e_1 = new Employer("Marchat", "Andy", "2019-10-30", "Comptable", 28807, "Comptabilité", 1, new Magasin("Jarditout", "85 rue lefebre", "89000", "Labas","ticket"), new Enfant('15'));

$e_1->__Date();
$e_1->Prime();
$e_1->Mag();
$e_1->resto();
$e_1->cheque_vacance();
$e_1->Nbenfant();
$e_1->Cheque_Noel();

$e_2 = new Employer("Croft", "Lara", "2015-09-25", "Secretaire", 26000, "Acueille/aide",1, new Magasin("JardiLand", "70 rue arbous", "87000", "sabal","ticket"), new Enfant('17')); 
$e_2->__Date();
$e_2->Prime();
$e_2->Mag();
$e_2->resto();
$e_2->cheque_vacance();
$e_2->Nbenfant();
$e_2->Cheque_Noel();

$e_3 = new Employer("Marchant", "Christopher", "2015-07-25", "Admin Reseaux", 36871, "Informatisien",0, new Magasin("Jarditout", "85 rue lefebre", "89000", "Labas","ticket"), new Enfant('Aucun')); 
$e_3->__Date();
$e_3->Prime();
$e_3->Mag();
$e_3->resto();
$e_3->cheque_vacance();
$e_3->Nbenfant();
$e_3->Cheque_Noel();

$e_4 = new Employer("Laforet", "Elfy", "2022-06-20", "Secretaire", 26000, "Acueille/aide",0, new Magasin("Jardipartout", "25 rue lamouise", "65000", "aparid","resto"), new Enfant('Aucun')); 
$e_4->__Date();
$e_4->Prime();
$e_4->Mag();
$e_4->resto();
$e_4->cheque_vacance();
$e_4->Nbenfant();
$e_4->Cheque_Noel();

$e_5 = new Employer("Menui", "Axel", "2018-04-24", "Logisticien", 27491, "Logistique",1, new Magasin("Jardipartout", "25 rue lamouise", "65000", "aparid","resto"), new Enfant('5')); 
$e_5->__Date();
$e_5->Prime();
$e_5->Mag();
$e_5->resto();
$e_5->cheque_vacance();
$e_5->Nbenfant();
$e_5->Cheque_Noel();