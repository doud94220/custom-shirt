<?php
namespace Controller;

use Entity\Commande;
use Repository\CommandeRepository;
/**
 * Description of CommandeController
 *
 * @author Julien
 */
class CommandeController extends ControllerAbstract
{
    /**
     * Cette fonction prend en paramètre l'id de l'utilisateur
     * elle sert à afficher les commandes (en cours et passées) de l'utilisateur connecté
     * 
     */
    public function showAction($id){
        $commandes = $this->app['commande.repository']->findAllById($user_id);
        
        return $this->render(
            'user/profile.html.twig',
            ['commandes' => $commandes]
        );
    }
    
    /**
     * Cette fonction sert à déclencher le paiement lorsque l'utilisateur valide son panier
     * elle prend en paramètre l'id_commande de la commande à payer
     */
    public function pay($id_commande){
        
    }
    
    /**
     * Cette fonction sert à envoyer un mail de confirmation lorsque la commande est validée 
     * @param int $id_commande
     */
    public function sendConfirmationMail($id_commande){
        
    }
    
    /**
     * Cette fonction permet à l'utilisateur de reproduire une commande passée
     */
    public function cloneCommande($id_commande){
        
    }
    
    
    
    
}
