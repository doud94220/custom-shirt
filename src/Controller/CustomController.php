<?php


namespace Controller;

use Entity\Custom;
use Repository\CustomRepository;

class CustomController extends ControllerAbstract
{
    // Récupération des choix de configuration de l'utilisateur 
    // On garde cette configuration en base pour pouvoir la partager
    
    public function listTissu()
    {
       $tissus = $this->app['tissu.repository']->findAllTissu();
//       var_dump($tissus);
       return $this->render
       (
               'custom/tissu.html.twig',
               [
                   'tissus' => $tissus
               ]
       );

    }
    
    public function listBouton()
    {
        $boutons = $this->app['bouton.repository']->findAllBouton();
        
        return $this->render
        (
                'custom/bouton.html.twig',
                [
                    'boutons' => $boutons
                ]
        );
    }
    
    
    
    
    public function fillMeasure_tissu()
    {
        $custom = new Custom();
        //$user = new User();
        $errors = [];
        
        if(!empty($_GET))
        {
            $custom->setTissu_id($_GET['tissu_id']);
            $custom = $this->app['custom.repository']->save($custom);
            
            $customManager = $this->app('custom.manager');
            $customManager->setTissu($_GET['tissu_id']);
            
            return $this->render
            (
                'custom/tissu.html.twig'
            );
        }
        else
        {
            $errors['tissu_id'] = 'Merci de choisir un tissu';
        }

    }   
        
    public function fillMeasure_bouton()
    {       
        $custom = new Custom();
        //$user = new User();
        $errors = [];

        if(!empty($_GET))
        {
            $custom->setButton_id($_GET['bouton_id']);
            $custom = $this->app['custom.repository']->save($custom);
            
            $customManager = $this->app('custom.manager');
            $customManager->setBouton($_GET['bouton_id']);
            
            return $this->render
            (
                'custom/bouton.html.twig' //à modif
            );
        }
        else
        {
            $errors['bouton_id'] = 'Merci de choisir un type de bouton';
        }
    }    
        
    public function fillMeasure_col()
    {
        $custom = new Custom();
        //$user = new User();
        $errors = [];
        
        if(!empty($_GET))
        {
            $custom->setCol($_GET['col']);
            $custom = $this->app['custom.repository']->save($custom);
            
            $customManager = $this->app('custom.manager');
            $customManager->setCol($_GET['col_id']);
            
            return $this->render
            (
                'custom/col.html.twig'
            );
        }
        else
        {
            $errors['col'] = 'Merci de choisir un type de col';
        }
    }
    
    public function fillMeasure_coupe()
    {    
        $custom = new Custom();
        //$user = new User();
        $errors = [];
        
        if(!empty($_GET))
        {
            $custom->setCoupe($_GET['coupe']);
            $custom = $this->app['custom.repository']->save($custom);
            
            $customManager = $this->app('custom.manager');
            $customManager->setCoupe($_GET['coupe_id']);
            
            return $this->render
            (
                'custom/coupe.html.twig'
            );
        }
        else
        {
            $errors['coupe'] = 'Merci de choisir une coupe';
        }

    } 
}    



//            $user
//                  ->setTaille($_POST['taille'])
//                  ->setPoids($_POST['poids'])
//                  ->setTour_cou($_POST['tour_cou'])
//                  ->setTour_poitrine($_POST['tour_poitrine'])
//                  ->setTour_taille($_POST['tour_taille'])
//                  ->setTour_bassin($_POST['tour_bassin'])
//                  ->setManche_droite($_POST['manche_droite'])
//                  ->setManche_gauche($_POST['manche_gauche'])
//                  ->setPoignet_droit($_POST['poignet_droit'])
//                  ->setPoignet_gauche($_POST['poignet_gauche'])
//                  ->SetCarrure($_POST['carrure'])
//                  ->setDos($_POST['dos'])
//                    ;  
//            
//            foreach ($_POST as $key => $value)
//            {
//                    $_POST[$key] = strip_tags(trim($value));
//                    $_POST[$key] = htmlentities($value);
//                    $_POST[$key] = addslashes($value);
//                    $_POST[$key] = htmlspecialchars($value);
//		
//                if(!is_numeric($_POST['taille']))   
//                {
//                    $errors['taille'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['taille']))   
//                {
//                    $errors['poids'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['taille']))   
//                {
//                    $errors['tour_cou'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['tour_poitrine']))   
//                {
//                    $errors['tour_poitrine'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['tour_taille']))   
//                {
//                    $errors['tour_taille'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['tour_bassin']))   
//                {
//                    $errors['tour_bassin'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['manche_droite']))   
//                {
//                    $errors['manche_droite'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['manche_gauche']))   
//                {
//                    $errors['manche_gauche'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['manche_gauche']))   
//                {
//                    $errors['manche_gauche'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['poignet_droit']))   
//                {
//                    $errors['poignet_droit'] = 'Merci de ne renseigner que des chiffres';
//                }
//                  if(!is_numeric($_POST['poignet_gauche']))   
//                {
//                    $errors['poignet_gauche'] = 'Merci de ne renseigner que des chiffres';
//                }
//                
//                else
//                {
//                    $this->addFlashMessage('Vos mesures ont bien été enregistré!');
//                    return $this->redirectRoute('produits', ['id' => $id]);
//                }
//                
//          }
            
         
            


   // Champs à vide si utilisateur non connecté via un champs hidden
   //JS en récupérant id_image dans une balise type="hidden"
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

