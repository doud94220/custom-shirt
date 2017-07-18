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
    
    public function listCol()
    {
        $cols = $this->app['col.repository']->findAllCol();
        
        return $this->render
        (
                'custom/col.html.twig',
                [
                    'cols' => $cols
                ]
        );
    }
    
    public function listCoupe()
    {
        $coupes = $this->app['coupe.repository']->findAllCoupe();
        
        return $this->render
        (
                'custom/coupe.html.twig',
                [
                    'coupe' => $coupes
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

