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
     * Cette méthode sert à afficher les commandes (en cours et passées) de l'utilisateur connecté
     * elle récupère l'utilisateur connecté grâce à la session et passe à la vue les commandes associées
     */
    public function showAction(){
        $user = $this->app['user.manager']->getUser();
        $commandes = $this->app['commande.repository']->findAllByUser($user);
        var_dump($commandes);
        if(is_null($commandes)){
            return $this->render('');
        }
        else{
            
        }
        return $this->render(
            'user/profile.html.twig',
            ['commandes' => $commandes]
        );
    }
    
    /**
     * cette méthode sert à créer une commande à partir des éléments contenus dans le panier en session
     */
    public function createAction(){
        
    }
    
    /**
     * cette méthode
     */
    public function followAction(){
        
    }
    
    public function deleteAction(){
        
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
