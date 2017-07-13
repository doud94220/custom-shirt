<?php


namespace Entity;


class Produit
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var type
     */
    private $type;

    /**
     * @var type
     */
    private $couleur;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $sexe;

    /**
     * @var int
     */
    private $prix;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param type $type
     */
    public function setType(Type $type)
    {
        $this->type = $type;
    }

    /**
     * @return type
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param type $couleur
     */
    public function setCouleur(Couleur $couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return type
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param type $photo
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    ##public function addPhoto(Photo $photo)
    ##{
    ##    $this->photos[] = $photo;
    ##}

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

}