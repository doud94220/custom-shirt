<?php

namespace Controller;


use Service\BasketManager;
use Entity\Basket;

//Pour tests
use Entity\Produit;

class BasketController extends ControllerAbstract
{
    /*
    Vue de la session avec le basket dedans :

        SESSION
                basket   =>   $productsAndConfigs[produit1, produit2, config1, config2, produit3]
    */

    //Fonction pour voir tout le panier
    public function consultAction()
    { 
        // !!!!!!!!!!!!!!! FORCAGE DE LA SESSION EN DUR POUR TESTS !!!!!!!!!!!!!!!
        if(!$this->session->has('basket')) //Si y'a pas de basket en session, j'en créer un en dur avec 3 produits
        {
                    echo 'je creer un basket dans session en dur';
            
            $product1 = new Produit;
            $product1->setId(1);
            $product1->setTitre("Titre Produit 1");
            $product1->setPrix(15);
            $product1->setQuantite(3); //J'ai rajouté l'attribut quantité dans l'Entity 'Produit' d'Anzor

            $product2 = new Produit;
            $product2->setId(2);
            $product2->setTitre("Titre Produit 2");
            $product2->setPrix(25);
            $product2->setQuantite(5);

            $product3 = new Produit;
            $product3->setId(3);
            $product3->setTitre("Titre Produit 3");
            $product3->setPrix(35);
            $product3->setQuantite(10);
        
            $productsAndConfigs = array($product1, $product2, $product3);
            
            $this->session->set('basket', $productsAndConfigs);
        }

        //Je recupère le basket en session
        $productsAndConfigs = $this->app['basket.manager']->readBasket(); //auto-completion marche pas mais normal

        //Routage vers la bone vue
        if(!empty($productsAndConfigs)) //Si le panier n'est pas vide, on va faire la page 'basket/index.html.twig'
        {
            return $this->render(
                                    'basket/index.html.twig',
                                    [
                                      'basket' => $productsAndConfigs
                                    ]
                                );
        }
        else //Si panier vide
        {
            //Je mets un message en session
            $this->addFlashMessage('Votre panier est vide !');

            //Je redirige vers la page d'acceuil
            return $this->redirectRoute('basket_consult');
        }    
        
    }//Fin consultAction()
    
    
    //Fonction pour supprimer un produit du panier
    public function deleteAction($idProduitEnSession)
    {
        echo "je vais supprimer le produit en position" . $idProduitEnSession . "dans le panier";

        //Je recupère le basket de la session
        $productsAndConfigs = $this->app['basket.manager']->readBasket();

        //Je retire le produit à supprimer
        unset($productsAndConfigs[$idProduitEnSession]);
                
        //Je mets le nouveau panier 'allégé d'un produit' en session
        $this->session->set('basket', $productsAndConfigs);

        //Je redirige vers la page consultation panier
        return $this->redirectRoute('basket_consult');

    }//Fin deleteAction()
    
    
    //Fonction pour incrémenter la quantité d'un produit dans le panier
    public function incrementAction($idProduitEnSession) //Id du produit en session
    {
        //Je recupère le basket de la session
        $productsAndConfigs = $this->app['basket.manager']->readBasket();		

        //J'incrémente la quantité du produit passé en arg de la fonction
        $productsAndConfigs[$idProduitEnSession]->setQuantite($productsAndConfigs[$idProduitEnSession]->getQuantite() + 1);
                
        //Je mets le nouveau panier en session
        $this->session->set('basket', $productsAndConfigs);

        //Je redirige vers la page consultation panier
        return $this->redirectRoute('basket_consult');

    }//Fin incrementAction()

    
    //Fonction pour décrémenter la quantité d'un produit dans le panier
    public function decrementAction($idProduitEnSession)
    {
        //Je recupère le basket de la session
        $productsAndConfigs = $this->app['basket.manager']->readBasket();

        //Je décrémente la quantité du produit passé en arg de la fonction
        $productsAndConfigs[$idProduitEnSession]->setQuantite($productsAndConfigs[$idProduitEnSession]->getQuantite() - 1);

        //Je mets le nouveau panier en session
        $this->session->set('basket', $productsAndConfigs);

        //Je redirige vers la page consultation panier
        return $this->redirectRoute('basket_consult');
 
    }//Fin decrementAction()
    
    
}//Fin BasketController
