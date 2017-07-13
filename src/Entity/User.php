<?php


namespace Entity;


class User 
{
    private $id_user;
    
    private $taille;
    private $poids;
    private $tour_cou;
    private $tour_poitrine;
    private $tour_taille;
    private $tour_bassin;
    private $manche_droite;
    private $manche_gauche;
    private $poignet_droit;
    private $poignet_gauche;
    private $carrure;
    private $dos;
    
    
     /**********GETTERS****************/
    
    public function getId_user() {
        return $this->id_user;
    }

    public function getTaille() {
        return $this->taille;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function getTour_cou() {
        return $this->tour_cou;
    }

    public function getTour_poitrine() {
        return $this->tour_poitrine;
    }

    public function getTour_taille() {
        return $this->tour_taille;
    }

    public function getTour_bassin() {
        return $this->tour_bassin;
    }

    public function getManche_droite() {
        return $this->manche_droite;
    }

    public function getManche_gauche() {
        return $this->manche_gauche;
    }

    public function getPoignet_droit() {
        return $this->poignet_droit;
    }

    public function getPoignet_gauche() {
        return $this->poignet_gauche;
    }

    public function getCarrure() {
        return $this->carrure;
    }

    public function getDos() {
        return $this->dos;
    }

    /**********SETTERS****************/
    
    public function setId_user($id_user) {
        $this->id_user = $id_user;
        return $this;
    }

    public function setTaille($taille) {
        $this->taille = $taille;
        return $this;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
        return $this;
    }

    public function setTour_cou($tour_cou) {
        $this->tour_cou = $tour_cou;
        return $this;
    }

    public function setTour_poitrine($tour_poitrine) {
        $this->tour_poitrine = $tour_poitrine;
        return $this;
    }

    public function setTour_taille($tour_taille) {
        $this->tour_taille = $tour_taille;
        return $this;
    }

    public function setTour_bassin($tour_bassin) {
        $this->tour_bassin = $tour_bassin;
        return $this;
    }

    public function setManche_droite($manche_droite) {
        $this->manche_droite = $manche_droite;
        return $this;
    }

    public function setManche_gauche($manche_gauche) {
        $this->manche_gauche = $manche_gauche;
        return $this;
    }

    public function setPoignet_droit($poignet_droit) {
        $this->poignet_droit = $poignet_droit;
        return $this;
    }

    public function setPoignet_gauche($poignet_gauche) {
        $this->poignet_gauche = $poignet_gauche;
        return $this;
    }

    public function setCarrure($carrure) {
        $this->carrure = $carrure;
        return $this;
    }

    public function setDos($dos) {
        $this->dos = $dos;
        return $this;
    }

      
            
            
}
