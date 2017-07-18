<?php


namespace Entity;

class Tissu 
{
    private $id_tissu;
    
    private $titre;
    private $stock;
    private $description;
    private $photo;
    private $prix;
    
    public function getTitre() {
        return $this->titre;
    }

    public function getId_tissu() {
        return $this->id_tissu;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }
    
    
    public function setId_tissu($id_tissu) {
        $this->id_tissu = $id_tissu;
        return $this;
    }

    public function setStock($stock) {
        $this->stock = $stock;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
        return $this;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    }


    
            
    
}
