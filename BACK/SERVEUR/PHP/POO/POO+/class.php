<?php
class Produit
{
public $nom;
public $quantite ;
public $prix;
public $rupture ;

function afficheProduit(){
    return " Affichage du produit";
}

function ajouterProduit(){
    return "Ajouter du produit";
}

function supprimerProduit(){
    return "Supprimer du produit";
}
}