<?php

namespace Entity;

class Custom 
{

    private $id_config;
    
    private $tissu_id;
    private $button_id;
    private $col_id;
    private $coupe_id;
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

    public function getCol_id() {
        return $this->col_id;
    }

    public function getCoupe_id() {
        return $this->coupe_id;
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

    public function setCol_id($col_id) {
        $this->col_id = $col_id;
        return $this;
    }

    public function setCoupe_id($coupe_id) {
        $this->coupe_id = $coupe_id;
        return $this;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    }


}  


