<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 19/07/2017
 * Time: 12:00
 */

namespace Entity;


class Tissu
{
    /**
     * @var int
     */
    private $id;

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
    private $photo;

    /**
     * @var int
     */
    private $prix;

    /**
     * @var string
     */
    private $composition;

    /**
     * @var string
     */
    private $grammage;

    /**
     * @var string
     */
    private $tirage;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Tissu
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Tissu
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
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
     * @return Tissu
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     * @return Tissu
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
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
     * @return Tissu
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * @return string
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * @param string $composition
     * @return Tissu
     */
    public function setComposition($composition)
    {
        $this->composition = $composition;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrammage()
    {
        return $this->grammage;
    }

    /**
     * @param string $grammage
     * @return Tissu
     */
    public function setGrammage($grammage)
    {
        $this->grammage = $grammage;
        return $this;
    }

    /**
     * @return string
     */
    public function getTirage()
    {
        return $this->tirage;
    }

    /**
     * @param string $tirage
     * @return Tissu
     */
    public function setTirage($tirage)
    {
        $this->tirage = $tirage;
        return $this;
    }






}