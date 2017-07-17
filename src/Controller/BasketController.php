<?php

namespace Controller;

use Service\BasketManager;
use Entity\Basket;

class BasketController extends ControllerAbstract
{
    //Fonction pour voir tout le panier
    public function consultAction()
    {       
        if(!empty($_GET)) //Si y'a quelque chose dans le get
        {
           if(!empty($_GET['action'])) //Si y'a bien une action dans le get
           { 
             if ($_GET['action'] == 'consult') //Le visiteur veut consulter son panier
             {
                $productsAndConfigs[] = $this->app['basket.manager']->readBasket(); //auto-completion marche pas mais normal
                /*
                Vue de la session avec le basket dedans :

                    SESSION
                            basket   =>   $productsAndConfigs[produit1, produit2, config1, config2, produit3]
                */
                if(!empty(productsAndConfigs)) //Si le panier n'est pas vide, on va faire la page 'basket/index.html.twig'
                {
                    return $this->render(
                                            'basket/index.html.twig',
                                            [
                                              'basket' => $productsAndConfigs[]
                                            ]
                                        );
                }
                else //Si panier vide
                {
                    $this->addFlashMessage('Votre panier est vide !');
                }
                
             }
             
           }
           
        }
        
    }//Fin consultAction()
    
    
    //Fonction pour supprimer un produit du panier
    public function deleteAction($idProduitEnSession)
    {
        if(!empty($_GET)) //Si y'a quelque chose dans le get
        {
           if(!empty($_GET['action'])) //Si y'a bien une action dans le get
           {
                if ($_GET['action'] == 'delete') //Le visiteur veut supprimer un produit du panier
                {
                   if (!empty($_GET['$idProduitEnSession'])) //Si y'a bien un id (celui du produit dans le tableau de produits en session)
                   {
                       //Je recupère le basket de la session
                       $productsAndConfigs[] = $this->app['basket.manager']->readBasket();
                        
                       //Je retire le produit à supprimer
                       $newProductsAndConfigs[] = array_splice($productsAndConfigs[], $idProduitEnSession, 1);
                        
                        //Je mets le nouveau panier 'allégé' en session
                        $this->session->set('basket', $newProductsAndConfigs[]);
                   }
                }
           }
    }//Fin deleteAction()
    
    
}//Fin BasketController
