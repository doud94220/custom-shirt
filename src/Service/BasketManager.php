<?php

namespace Service;

use Symfony\Component\HttpFoundation\Session\Session;
use Entity\Basket;

/*
Vue de la session avec le basket dedans :

    SESSION
            basket   =>   $productsAndConfigs[produit1, produit2, config1, config2, produit3]
*/

class BasketManager
{
    private $session;
      
    //Méthode putProductToBasket($produit) qui met en session les infos du PRODUIT choisi
    public function putProductToBasket($produit)
    {
        //Initialisation variable basket
        if(!$this->session->get('basket')) //Si y'a pas de panier
        {
           //Créer un objet Basket
           $basket = new Basket();
           
           //Y placer un tableau de produit(s) et config(s)
           $productsAndConfigs[];
           $basket = $productsAndConfigs[];
        }
        else //Si y'a un panier
        {
           $productsAndConfigs[] = $this->session->get('basket'); //Je recup la value correspondant à la key 'basket'
        }
        
        //Ajouter le produit dans le $productsAndConfigs[] du panier
        $productsAndConfigs[] = $produit;
        
        //Maj panier en session
        $this->session->set('basket', $productsAndConfigs[]);
        
    }//Fin putProductToBasket()
  
    //Méthode putConfigToBasket($config) qui met en session les infos de la CONFIG choisi
    public function putConfigToBasket($config)
    {
        //Initialisation variable basket
        if(!$this->session->get('basket')) //Si y'a pas de panier
        {
          //Créer un objet Basket
          $basket = new Basket();
           
           //Y placer un tableau de produit(s) et config(s)
          $productsAndConfigs[];
          $basket = $productsAndConfigs[];
        }
        else //Si y'a un panier
        {
           $productsAndConfigs[] = $this->session->get('basket'); //Je recup la value correspondant à la key 'basket'
        }
        
        //Ajouter la config dans le $productsAndConfigs[] du panier
        $productsAndConfigs[] = $config;
        
        //Maj panier en session
        $this->session->set('basket', $productsAndConfigs[]);
        
    }//Fin putConfigToBasket()
    
    //Méthode putConfigToBasket() qui met en session les infos de la CONFIG choisi
    public function readBasket()
    {
        if(!$this->session->get('basket')) //Si y'a pas de panier
        {
            return null;
        }
        else
        {
            return $this->session->get('basket');
        }
    }

}//Fin BasketManager












