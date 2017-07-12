<?php


namespace Controller;

use Entity\Config;
use Entity\User;

class ConfigController extends ControllerAbstract
{
    // JS en récupérant id_image dans une balise type="hidden"
    public function fillMeasure()
    {
        $config = new Config();
        $user = new User();
        $errors = [];
        
        if(!empty($_GET))
        {
            $config
                   ->setTissu_id($_GET['tissu_id'])
                   ->setButton_id($_GET['bouton_id'])
                   ->setCol($_GET['col'])
                   ->setCoupe($_GET['coupe'])
                   ->setPrix('')
                   ;
            
            if(empty($_GET['tissu_id']))
            {
                $errors['tissu_id'] = 'Merci de choisir un tissu';
            }
            
            if(empty($_GET['bouton_id']))
            {
                $errors['bouton_id'] = 'Merci de choisir un type de boutton';
            }
            
            if(empty($_GET['col']))
            {
                $errors['col'] = 'Merci de choisir un type de col';
            }
            
            if(empty($_GET('coupe'))
            {
                $errors['coupe'] = 'Merci de choisir une coupe';
            }
            
            if(empty($errors))
            {
                $config = $this->app['config.manager']->getConfig();
                
            }
            
            $user
                  ->setTaille($_POST['taille'])
                  ->setPoids($_POST['poids'])
                  ->setTour_cou($_POST['tour_cou'])
                  ->setTour_poitrine($_POST['tour_poitrine'])
                  ->setTour_taille($_POST['tour_taille'])
                  ->setTour_bassin($_POST['tour_bassin'])
                  ->setManche_droite($_POST['manche_droite'])
                  ->setManche_gauche($_POST['manche_gauche'])
                  ->setPoignet_droit($_POST['poignet_droit'])
                  ->setPoignet_gauche($_POST['poignet_gauche'])
                  ->carrure($_POST['carrure'])
                  ->dos($_POST['dos'])
                    ;  
            
            
            
            
        }

   // Champs à vide si utilisateur non connecté via un champs hidden
   //ou aller directement au choix des matières sans le formulaire (appeler les Setter venant de la l'objet User)
   // Si on a un utilisateur connecté
   // Setpoids= userpoids
//        $user = $this->app['user.manager']->getUser();
//        
//        if (!is_null($user)) 
//        {
//            $config->setCol($user->getCol())...
//        } 
//        else 
//        {
//            $this->redirectRoute('la route du form pour le mensurations')
//        }
//        
                
                
                
                
                
                
                
                
                
                
    }
}
