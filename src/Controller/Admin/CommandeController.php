<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Commande;

/**
 * Description of CommandeController
 *
 * @author Julien
 */
class CommandeController extends ControllerAbstract
{
    /**
     * Cette fonction sert à afficher toutes les commandes par date d'enregistrement
     */
    public function listAction(){
        $commandes = $this->app['commande.repository']->findAll();
        
        return $this->render(
            'admin/commande/list.html.twig',
            ['commandes' => $commandes]
        );
    }
    
    /**
     * Cette fonction sert à afficher côté admin l'ensemble des commandes en les triant par état
     * elle prend en paramètre la valeur du champs état de la table commande 
     * 
     * @param string $etat
     * @return Commande
     */
    public function commandByState($etat){
        $commandes = $this->app['commande.repository']->findAllByState($etat);

       
        return $this->render(
            'admin/commande/list.html.twig',
            ['commandes' => $commandes]
        );
    }
    
    public function editAction(){
        
    }
    
    
    
    public function sendDeliveryMail(){
        
    }
}
