<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Commande;

/**
 * Description of CommandeController
 *
 * @author Etudiant
 */
class CommandeController extends \ControllerAbstract
{
    
    /**
     * Cette fonction sert à afficher côté admin l'ensemble des commandes en les triant par état
     * elle prend en paramètre 
     * 
     * @param string $etat
     * @return Commande
     */
    public function commandByState($etat){
        $commandes = $this->app['admin.commande.repository']->findAllByState($etat);
        
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
