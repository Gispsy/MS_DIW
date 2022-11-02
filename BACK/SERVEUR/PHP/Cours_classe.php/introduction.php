<?php

abstract class Humain
{

    public  $nom;
    public  $prenom;
    protected $age;

    public function __construct($prenom, $nom, $age){           //Construction 

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
    }
    
    abstract public function travailler();

    public function setAge($age){

        if(is_int($age) && $age >=1 && $age <= 120){                        //aide a obliger a metre un entier entre 1 et 120
        $this->age = $age;
        } else {
            throw new Exception("L'age de l'employer doit être un entier entre 1 et 120 !");
        }
    }

    public function gatAge(){

        return $this->age;

    }

}

class Employe extends Humain
{                                                               //Classe avec valeur pour employer

    public function travailler(){

        return "Je suis un employé et je travaille";
    }

    public function presentation(){                                                     //Affiche un var_dump

        var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans");

    }
}

class Patron extends Employe
{                                                               //Classe avec valeur pour Patron 
    public $voiture;

    public function __construct($prenom, $nom, $age, $voiture){           //Construction 

        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    public function travailler(){
        return "Je suis le patron et je bosse aussi";
    }

    public function presentation(){
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans, et j'ai une voiture");
    }

    public function rouler(){
        var_dump("Bonjour, je roule avec ma $this->voiture");
    }
}

$employe1 = new Employe("Lior", "Chamla", 32);                                          //valeur d'employer
$employe2 = new Employe("Magali", "Pernin", 32);

$employe1->presentation();

$patron = new Patron("Joseph", "Durand", 55, "Mercedes");

$patron->presentation();
$patron->rouler();

class Etudiant extends Humain
{

    public function travailler(){
        return "Je suis étudiant et je révise";
    }

}

$etudiant = new Etudiant("Magel", "Dupuis", 21);

faireTravailler($employe1);
faireTravailler($patron);
faireTravailler($etudiant);

function faireTravailler(Humain $objet){

    var_dump("Travail, cours : {$objet->travailler()}");

}

$employe1->setAge(50);

?>