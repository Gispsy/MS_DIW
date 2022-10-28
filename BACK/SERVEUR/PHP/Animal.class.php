<?php
class Animal
{
    public $espece;
    private $taille;
    private $poids;
    private $nbpattes;

    public function __manger(){
        echo'je mange des pates';

    }

    public function __avancer(int $nbpas){


    }
}

$UnChien = new Animal();
$UnAutreChien = new Animal();
$UnChat = new Animal();
$UnLapin = new Animal();

?>