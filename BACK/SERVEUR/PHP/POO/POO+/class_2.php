<?php

class Produit
{
private $nom;
private $quantite ;
private $prix;
private $rupture ;

public function ajouterProduit(){
    $this->quantite++;
    if ($this->quantite > 0) $this->rupture = false;
}

public function __toString()
{
    return
    "Nom: ".$this->nom."<br/>".
    "Quantité: ".$this->quantite."<br/>".
    "Prix: ".$this->prix."<br/>".
    (($this->rupture)?"Rupture de stock":"En stock");
}

public function supprimerProduit(int $nb = 1){
    $this->quantite -= $nb;
    if ($this->quantite <= 0) {
        $this->rupture = true;
        $this->quantite = 0;
    }
}
}?>