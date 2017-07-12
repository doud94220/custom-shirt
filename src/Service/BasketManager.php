<?php

namespace Service;

use Symfony\Component\HttpFoundation\Session\Session;
use Entity\Basket;

class BasketManager
{
    private $session;
      
    //    Faire une méthode putToBasket($article) qui met en session les infos de l'ARTICLE choisi
    
    public function putProductToBasket($produit)
    {
        //Initialisation variable basket
        $basket = ''; //PA SUR QUE CA MARCHE
        
        if(!$this->session->get('basket')) //Si y'a pas de panier
        {
           //Créer un objet Basket
           $basket = new Basket();
        }
        else //Si y'a un panier
        {
           $basket = $this->session->get('basket');
        }
        
        //Lire l'objet $produit et alimenter un tableau d'objets $panier
        $idProduit = $produit->getId;
        $titreProduit = $produit->getTitre;
        $quantiteProduit = $produit->getQuantite;
        $prixProduit = $produit->getPrix;
        
        
        $basket->setT
        $basket->setT
        $basket->setT
        $basket->setT
        
        //Mettre panier en session
        //$this->session->set('panier', $panier[]);
    }
    
    public function putCustomShirtToBasket($config)
    {
        
    }
}//Fin BasketManager
