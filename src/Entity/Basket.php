<?php

namespace Entity;

class Basket
{
   // ATTRIBUTS 
   
   private $titre;
   private $produitId;
   private $configId;
   private $quantite;
   private $prix;
   
   // GETTERS ET SETTERS
   
   public function getTitre() {
       return $this->titre;
   }

   public function getProduitId() {
       return $this->produitId;
   }

   public function getConfigId() {
       return $this->configId;
   }

   public function getQuantite() {
       return $this->quantite;
   }

   public function getPrix() {
       return $this->prix;
   }

   public function setTitre($titre) {
       $this->titre = $titre;
       return $this;
   }

   public function setProduitId($produitId) {
       $this->produitId = $produitId;
       return $this;
   }

   public function setConfigId($configId) {
       $this->configId = $configId;
       return $this;
   }

   public function setQuantite($quantite) {
       $this->quantite = $quantite;
       return $this;
   }

   public function setPrix($prix) {
       $this->prix = $prix;
       return $this;
   }
   
    // AUTRES FONCTIONS
   
}
