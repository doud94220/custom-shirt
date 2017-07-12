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
    
    function getId_user() {
        return $this->id_user;
    }

    function getTaille() {
        return $this->taille;
    }

    function getPoids() {
        return $this->poids;
    }

    function getTour_cou() {
        return $this->tour_cou;
    }

    function getTour_poitrine() {
        return $this->tour_poitrine;
    }

    function getTour_taille() {
        return $this->tour_taille;
    }

    function getTour_bassin() {
        return $this->tour_bassin;
    }

    function getManche_droite() {
        return $this->manche_droite;
    }

    function getManche_gauche() {
        return $this->manche_gauche;
    }

    function getPoignet_droit() {
        return $this->poignet_droit;
    }

    function getPoignet_gauche() {
        return $this->poignet_gauche;
    }

    function getCarrure() {
        return $this->carrure;
    }

    function getDos() {
        return $this->dos;
    }

    /**********SETTERS****************/
    
    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setPoids($poids) {
        $this->poids = $poids;
    }

    function setTour_cou($tour_cou) {
        $this->tour_cou = $tour_cou;
    }

    function setTour_poitrine($tour_poitrine) {
        $this->tour_poitrine = $tour_poitrine;
    }

    function setTour_taille($tour_taille) {
        $this->tour_taille = $tour_taille;
    }

    function setTour_bassin($tour_bassin) {
        $this->tour_bassin = $tour_bassin;
    }

    function setManche_droite($manche_droite) {
        $this->manche_droite = $manche_droite;
    }

    function setManche_gauche($manche_gauche) {
        $this->manche_gauche = $manche_gauche;
    }

    function setPoignet_droit($poignet_droit) {
        $this->poignet_droit = $poignet_droit;
    }

    function setPoignet_gauche($poignet_gauche) {
        $this->poignet_gauche = $poignet_gauche;
    }

    function setCarrure($carrure) {
        $this->carrure = $carrure;
    }

    function setDos($dos) {
        $this->dos = $dos;
    }


            
            
            
}
