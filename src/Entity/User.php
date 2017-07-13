<?php
namespace Entity;

class User {
    /**
     *
     * @var int 
     */
    private $id;
    
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
    
    /**
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
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
