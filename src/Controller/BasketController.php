<?php

namespace Controller;

use Service\BasketManager;
use Entity\Basket;

class BasketController extends ControllerAbstract
{
    public function consultAction()
    {       
        if(!empty($_GET)) //Si y'a quelque chose dans le get
        {
           if(!empty($_GET['action'])) //Si y'a bien une action dans le get
           { 
             if ($_GET['action'] == 'consult') //Le visiteur veut consulter son panier
             {
                $productsAndConfigs[] = $this->app['basket.manager']->readBasket(); //AUTO-COMPLETION MARCHE PAS
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
    
}//Fin BasketController
