<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 13/07/2017
 * Time: 15:25
 */

namespace Controller;


/**
 * Class IndexController
 * @package Controller
 */
class IndexController extends ControllerAbstract
{
    public function indexAction()
    {
        $produits = $this->app['produit.repository']->findAll();

        return $this->render('index.html.twig', ['produits' => $produits]);
    }

    public function idAction($id)
    {
        $produits = $this->app['produit.repository']->findById($id);

        return $this->render('produit/produit.html.twig', ['produits' => $produits]);
    }

    public function ajaxApi()
    {

        $req = "SELECT p.*, t.type, cou.couleur, t.categorie_id, c.categorie 
                FROM produit p
                JOIN type t ON p.type_id = t.id 
                JOIN categorie c ON t.categorie_id = c.id
                JOIN couleur cou ON p.couleur_id = cou.id";

        if(!empty($_GET)) {
            $where = [];

            foreach($_GET as $key => $value){

                if(!empty($value)){

                    if($key == 'type'){
                        $req .= " JOIN type t2 ON p.type_id = t2.id";
                    }

                    elseif($key == 'taille'){
                        $req .= " JOIN produit_taille p_t ON p.id = p_t.produit_id 
						  JOIN taille ta ON p_t.taille_id = ta.id";
                    }

                    if($key == 'categorie'){
                        $where[] = " c.categorie = '$value'";
                    }

                    elseif($key == 'type'){
                        $where[] = " t2.type = '$value'";
                    }
                    elseif($key == 'couleur'){
                        $where[] = " cou.couleur = '$value'";
                    }
                    elseif($key == 'taille'){
                        $where[] = " ta.taille = '$value'";
                    }
                    elseif($key == 'sexe'){
                        $where[] = " p.sexe = '$value'";
                    }
                    elseif($key == 'prix'){
                        $where[] = " p.prix <= $value AND p.prix >= $value-50";
                    }

                }
            }

            if (!empty($where)) {
                $req .= ' WHERE ' . implode(' AND ', $where);
            }

            if($_GET['range']==='price_up') {
                $req .= " ORDER BY p.prix ASC";
            }
            if($_GET['range']==='price_down') {
                $req .= " ORDER BY p.prix DESC";
            }

            if(($_GET['nb_resultat'])) {
                $req .= " LIMIT " . $_GET['nb_resultat'];
            }




        }

        $results = $this->app['db']->fetchAll($req);

        $produits = [];

        foreach ($results as $result) {
            $produit = $this->app['produit.repository']->buildFromArray($result);
            $produits[] = $produit;
        }
echo ceil(count($produits)/3);
echo ceil($req);
        return $this->render('produit/produit_list.html.twig', ['produits' => $produits]);
        //return $this->app->json($results);


    }
}