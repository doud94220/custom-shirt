<?php



namespace Entity;

class Coupe 
{

    private $id_config;
    
    private $tissu_id;
    private $button_id;
    private $col;
    private $coupe;
    private $prix;

    public function getId_config() {
        return $this->id_config;
    }

    public function getTissu_id() {
        return $this->tissu_id;
    }

    public function getButton_id() {
        return $this->button_id;
    }

    public function getCol() {
        return $this->col;
    }

    public function getCoupe() {
        return $this->coupe;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setId_config($id_config) {
        $this->id_config = $id_config;
        return $this;
    }

    public function setTissu_id($tissu_id) {
        $this->tissu_id = $tissu_id;
        return $this;
    }

    public function setButton_id($button_id) {
        $this->button_id = $button_id;
        return $this;
    }

    public function setCol($col) {
        $this->col = $col;
        return $this;
    }

    public function setCoupe($coupe) {
        $this->coupe = $coupe;
        return $this;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    }


    
    
}
