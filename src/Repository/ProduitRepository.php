<?php

namespace Repository;

use Entity\Couleur;
use Entity\Produit;
use Entity\Categorie;
use Entity\Type;

/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 13/07/2017
 * Time: 11:11
 */


<<<<<<< HEAD
use Entity\Categorie;
use Entity\Tissu;
use Entity\Produit;
use Entity\Type;
=======

>>>>>>> 2583389a7db3a67007d1905a9b6e592cfeed0f18

class ProduitRepository extends RepositoryAbstract
{

    public function getTable()
    {
        return 'produit';
    }

    /**
     * @return array
     */
    public function findAll()
    {
        $query = <<<EOS
<<<<<<< HEAD
SELECT p.*, t.type, ti.nom, ti.desc, ti.composition, ti.grammage, ti.tirage, t.categorie_id, cat.categorie 
FROM produit p
JOIN type t ON p.type_id=t.id
JOIN categorie cat ON cat.id=t.categorie_id
JOIN tissu ti ON p.tissu_id=ti.id
=======
SELECT p.*, t.type, c.couleur, t.categorie_id, cat.categorie 
FROM produit p
JOIN type t ON p.type_id=t.id
JOIN categorie cat ON cat.id=t.categorie_id
JOIN couleur c ON p.couleur_id=c.id
>>>>>>> 2583389a7db3a67007d1905a9b6e592cfeed0f18
EOS;

        $dbProduits = $this->db->fetchAll($query);
        $produits = []; // le tableau dans lequel vont être stockées les entités Article

        foreach ($dbProduits as $dbProduit) {
            $produit = $this->buildFromArray($dbProduit);

            $produits[] = $produit;
        }

        return $produits;

    }

    public function findById($id)
    {
        $query = <<<EOS
<<<<<<< HEAD
SELECT p.*, t.type, ti.nom, ti.desc, ti.composition, ti.grammage, ti.tirage, t.categorie_id, cat.categorie 
FROM produit p
JOIN type t ON p.type_id=t.id
JOIN categorie cat ON cat.id=t.categorie_id
JOIN tissu ti ON p.tissu_id=ti.id
=======
SELECT p.*, t.type, c.couleur, t.categorie_id, cat.categorie 
FROM produit p
JOIN type t ON p.type_id=t.id
JOIN categorie cat ON cat.id=t.categorie_id
JOIN couleur c ON p.couleur_id=c.id
>>>>>>> 2583389a7db3a67007d1905a9b6e592cfeed0f18
WHERE p.id = :id
EOS;

        $dbProduit = $this->db->fetchAssoc(
            $query,
            [':id' => $id]
        );

        if (!empty($dbProduit)) {
            return $this->buildFromArray($dbProduit);
        }

        return null;

    }

    /**
     * @param array $dbArticle
     * @return Article
     */
    public function buildFromArray(array $dbProduit)
    {
        $produit = new Produit();

        $type = new Type;

<<<<<<< HEAD
        $tissu = new Tissu;
=======
        $couleur = new Couleur;

        $category = new Categorie;

        $type
            ->setId($dbProduit['type_id'])
            ->setCategorie($category)
            ->setType($dbProduit['type'])
        ;
>>>>>>> 2583389a7db3a67007d1905a9b6e592cfeed0f18

        $category = new Categorie;

<<<<<<< HEAD
        $type
            ->setId($dbProduit['type_id'])
            ->setCategorie($category)
            ->setType($dbProduit['type'])
        ;

        $tissu
            ->setId($dbProduit['tissu_id'])
            ->setTitre($dbProduit['nom'])
            ->setComposition($dbProduit['composition'])
            ->setGrammage($dbProduit['grammage'])
            ->setDescription($dbProduit['desc'])
            ->setTirage($dbProduit['tirage'])
        ;

=======
>>>>>>> 2583389a7db3a67007d1905a9b6e592cfeed0f18
        $category
            ->setId($dbProduit['categorie_id'])
            ->setTitle($dbProduit['categorie'])
        ;

        $produit
            ->setId($dbProduit['id'])
            ->setTitre($dbProduit['titre'])
            ->setType($type)
<<<<<<< HEAD
            ->setTissu($tissu)
=======
            ->setCouleur($couleur)
>>>>>>> 2583389a7db3a67007d1905a9b6e592cfeed0f18
            ->setDescription($dbProduit['description'])
            ->setReference($dbProduit['reference'])
            ->setPhoto($dbProduit['photo'])
            ->setSexe($dbProduit['sexe'])
            ->setPrix($dbProduit['prix'])
        ;

        return $produit;
    }

}