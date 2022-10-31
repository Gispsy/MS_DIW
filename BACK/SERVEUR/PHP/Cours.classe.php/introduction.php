<?php

class Employe
{                                                               //Classe avec valeur pour employer
    public  $nom;
    public  $prenom;
    private  $age;


    public function __construct($prenom, $nom, $age){           //Construction 

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
    }

    public function setAge($age){

        if(is_int($age) && $age >=1 && $age <= 120){                        //aide a obliger a metre un entier entre 1 et 120
        $this->age = $age;
        } else {
            throw new Exception("L'age de l'employer doit etre un entier entre 1 et 120 !");
        }
    }
    public function gatAge(){

        return $this->age;

    }

    public function presentation(){                                                     //Affiche un var_dump

        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");

    }
}

class Patron
{                                                               //Classe avec valeur pour employer
    public  $nom;
    public  $prenom;
    private  $age;
    public $voiture;

    public function __construct($prenom, $nom, $age, $voiture){           //Construction 

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
        $this->voiture = $voiture;
    }

    public function setAge($age){

        if(is_int($age) && $age >=1 && $age <= 120){                        //aide a obliger a metre un entier entre 1 et 120
        $this->age = $age;
        } else {
            throw new Exception("L'age de l'employer doit etre un entier entre 1 et 120 !");
        }
    }
    public function gatAge(){

        return $this->age;

    }

    public function presentation(){                                                     //Affiche un var_dump

        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");

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

$employe1->setAge(50);
