<?php

namespace Controller;

use Service\BasketManager;
use Entity\Basket;

//Pour tests
use Entity\Produit;

class BasketController extends ControllerAbstract
{
    //Fonction pour voir tout le panier
    public function consultAction()
    {       
        
        // !!!!!!!!!!!!!!! FORCAGE DE LA SESSION EN DUR POUR TESTS !!!!!!!!!!!!!!!
        $product1 = new Produit;
        $product1->setId(1);
        $product1->setTitre("Titre Produit 1");
        $product1->setPrix(15);

        $product2 = new Produit;
        $product2->setId(2);
        $product2->setTitre("Titre Produit 2");
        $product2->setPrix(25);

        $product3 = new Produit;
        $product3->setId(3);
        $product3->setTitre("Titre Produit 3");
        $product3->setPrix(35);

        $productsAndConfigs = array($product1, $product2, $product3);
        
        $this->session->set('basket', $productsAndConfigs);
        
                        //echo '<pre>'; var_dump($productsAndConfigs); echo '</pre><br><br>';	
                        //echo '<pre>'; var_dump($this->session->get('basket')); echo '</pre><br><br>';
        
        if(!empty($_GET)) //Si y'a quelque chose dans le get
        {
           if(!empty($_GET['action'])) //Si y'a bien une action dans le get
           { 
             if ($_GET['action'] == 'consult') //Le visiteur veut consulter son panier
             {
                $productsAndConfigs = $this->app['basket.manager']->readBasket(); //auto-completion marche pas mais normal
                          
                /*
                Vue de la session avec le basket dedans :

                    SESSION
                            basket   =>   $productsAndConfigs[produit1, produit2, config1, config2, produit3]
                */
                if(!empty($productsAndConfigs)) //Si le panier n'est pas vide, on va faire la page 'basket/index.html.twig'
                {
                    //echo '<pre>'; var_dump($this->session->get('basket')); echo '</pre><br><br>';
                    echo '<pre>';var_dump($productsAndConfigs);echo '</pre>';
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
                    return $this->redirectRoute('homepage');
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
                        
                        //Je redirige vers la page consultation panier
                        return $this->redirectRoute('basket_consult');
                   }
                }
           }
        }
    }//Fin deleteAction()
    
    
    //Fonction pour incrémenter la quantité d'un produit dans le panier
    public function incrementAction($idProduitEnSession)
    {
        if(!empty($_GET)) //Si y'a quelque chose dans le get
        {
           if(!empty($_GET['action'])) //Si y'a bien une action dans le get
           {
                if ($_GET['action'] == 'increment') //Le visiteur veut incrementer la quantité d' un produit du panier
                {
                   if (!empty($_GET['$idProduitEnSession'])) //Si y'a bien un id (celui du produit dans le tableau de produits en session)
                   {
                        //Je recupère le basket de la session
                        $productsAndConfigs[] = $this->app['basket.manager']->readBasket();

                        //J'incrémente la quantité du produit passé en arg de la fonction
                        $productsAndConfigs[$idProduitEnSession]->setQuantité = $productsAndConfigs[$idProduitEnSession]->getQuantité + 1;

                        //Je mets le nouveau panier en session
                        $this->session->set('basket', $productsAndConfigs[]);
                       
                        //Je redirige vers la page consultation panier
                        return $this->redirectRoute('basket_consult');
                   }
                }
           }
        }
    }//Fin incrementAction()

    
    //Fonction pour décrémenter la quantité d'un produit dans le panier
    public function decrementAction($idProduitEnSession)
    {
        if(!empty($_GET)) //Si y'a quelque chose dans le get
        {
           if(!empty($_GET['action'])) //Si y'a bien une action dans le get
           {
                if ($_GET['action'] == 'decrement') //Le visiteur veut décrementer la quantité d' un produit du panier
                {
                   if (!empty($_GET['$idProduitEnSession'])) //Si y'a bien un id (celui du produit dans le tableau de produits en session)
                   {
                        //Je recupère le basket de la session
                        $productsAndConfigs[] = $this->app['basket.manager']->readBasket();

                        //Je décrémente la quantité du produit passé en arg de la fonction
                        $productsAndConfigs[$idProduitEnSession]->setQuantité = $productsAndConfigs[$idProduitEnSession]->getQuantité - 1; 

                        //Je mets le nouveau panier en session
                        $this->session->set('basket', $productsAndConfigs[]);
                       
                        //Je redirige vers la page consultation panier
                        return $this->redirectRoute('basket_consult');
                   }
                }
           }
        }
    }//Fin decrementAction()
    
    
}//Fin BasketController
