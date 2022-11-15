<?php

class Produit
{
private $nom;
private $quantite ;
private $prix;
private $rupture ;

public function __construct($nom, $prix, $quantite=0)
{
    $this->nom = $nom;
    $this->quantite = $quantite;
    $this->prix = $prix;
    $this->rupture = $quantite>=0;
}

public function ajouterProduit(){
    $this->quantite++;
    if ($this->quantite > 0) $this->rupture = false;
}

public function supprimerProduit(int $nb = 1){
    $this->quantite -= $nb;
    if ($this->quantite <= 0) {
        $this->rupture = true;
        $this->quantite = 0;
    }
}

public function getNom()
{

return $this->nom;

}

public function setNom($nom)
{

$this->nom = $nom;

return $this;

}

public function getQuantite()
{
return $this->quantite;
}

public function setQuantite($quantite)
{
$this->nom = $quantite;

return $this;
}

public function getPrix()
{
return $this->prix;
}

public function setPrix($prix)
{
$this->nom = $prix;

return $this;
}

public function getRupture()
{
return $this->rupture;
}

public function setRupture($rupture)
{
$this->nom = $rupture;

return $this;
}

function afficheProduit()
{
    return " Affichage du produit";
}

}