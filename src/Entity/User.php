<?php
namespace Entity;

class User 
{
    /**
     *
     * @var string 
     */
    private $lastname;
    
    /**
     *
     * @var string
     */
    private $firstname;
    
    /**
     *
     * @var string
     */
    private $email;
    
    /**
     *
     * @var string
     */
    private $password;
    
    /**
     *
     * @var string 
     */
    private $role = 'user';
    
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
    
    
    /**
     * 
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * 
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * 
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * 
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * 
     * @return string
     */
    public function getRole() {
        return $this->role;
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

    /**
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param int $id
     * @return User
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * 
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * 
     * @param string $email
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * 
     * @param string $password
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * 
     * @param string $role
     * @return User
     */
    public function setRole($role) {
        $this->role = $role;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getFullName(){
        return $this->firstname . ' ' . $this->lastname;
    }
    
    /**
     * 
     * @return bool
     */
    public function isAdmin(){
        return $this->role == 'admin';
    }
}
