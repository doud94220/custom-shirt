<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 13/07/2017
 * Time: 11:11
 */

namespace Repository;

use Entity\Couleur;
use Entity\Type;

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
SELECT p.*, c.couleur, t.type, t.categorie_id
FROM produit p
JOIN couleur c ON p.couleur_id = c.id
JOIN type p ON p.type_id = t.id
EOS;

        $dbProduits = $this->db->fetchAll($query);
        $produits = []; // le tableau dans lequel vont être stockées les entités Article

        foreach ($dbProduits as $dbProduit) {
            $produit = $this->buildFromArray($dbProduit);

            $produits[] = $produit;
        }

        return $produits;

    }

    public function find($id)
    {
        $query = <<<EOS
SELECT p.*, c.couleur, t.type, t.categorie_id
FROM produit p
JOIN couleur c ON p.couleur_id = c.id
JOIN type p ON p.type_id = t.id
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

        $couleur = new Couleur();

        $type = new Type();

        $couleur
            ->setId($dbProduit['couleur_id'])
            ->setCouleur($dbProduit['couleur'])
        ;

        $type
            ->setId($dbArticle['type_id'])
            ->setType($dbArticle['type'])
            ->setCategorie($dbArticle['categorie_id'])
        ;

        $produit
            ->setId($dbProduit['id'])
            ->setCategory($type)
            ->setAuthor($couleur)
            ->setTitle($dbProduit['titre'])
            ->setHeader($dbProduit['description'])
            ->setContent($dbProduit['reference'])
            ->setContent($dbProduit['photo'])
            ->setContent($dbProduit['sexe'])
            ->setContent($dbProduit['prix'])
        ;

        return $produit;
    }

}