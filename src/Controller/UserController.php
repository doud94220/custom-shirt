<?php
namespace Controller;

use Entity\User;

class UserController extends ControllerAbstract
{
    public function registerAction(){
        $user = new User();
        $errors = [];
        
        if(!empty($_POST)){
            $user
                ->setLastname($_POST['lastname'])
                ->setFirstname($_POST['firstname'])
                ->setEmail($_POST['email'])
            ;
            
            if(empty($_POST['lastname'])){
                $errors['lastname'] = 'Le nom est obligatoire';
            }
            
            if(empty($_POST['firstname'])){
                $errors['firstname'] = 'Le prénom est obligatoire';
            }
            
            if(empty($_POST['email'])){
                $errors['email'] = "L'e-mail est obligatoire";
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'e-mail n'est pas valide";
            }elseif(!empty($this->app['user.repository']->findByEmail($_POST['email']))){
                $errors['email'] = 'Cet email est déjà utilisé';
            }
            
            if(empty($_POST['password'])){
                $errors['password'] = "Le mot de passe est obligatoire";
            }elseif(!preg_match('/^[a-zA-Z0-9_-]{6,20}$/', $_POST['password'])){
                $errors['password'] = "Le mot de passe doit comprendre entre 6 et 20 caractères et ne doit contenir que des lettres, des chiffres ou les caractères _ et -";
            }
            
            if(empty($_POST['password_confirm'])){
                $errors['password_confirm'] = "La confirmation du mot de passe est obligatoire";
            }elseif($_POST['password'] != $_POST['password_confirm']){
                $errors['password_confirm'] = "La confirmation n'est pas identique au mot de passe";
            }
            
            if (empty($errors)){
                $user->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
                $this->app['user.repository']->save($user);
                $this->app['user.manager']->login($user);
                
                return $this->redirectRoute('homepage');
            }else{
                $msg = '<strong>Le formulaire contient des erreurs</strong>';
                $msg .= '<br>'. implode('<br>', $errors);
                
                $this->addFlashMessage($msg, 'error');
            }
        }
        
        return $this->render(
            'user/register.html.twig',
            [
                'user' => $user
            ]
        );
    }
    
    public function loginAction(){
        $email = '';
        
        if(!empty($_POST)){
            $email = $_POST['email'];
            
            $user = $this->app['user.repository']->findByEmail($email);
            
            if(!is_null($user)){
                if($this->app['user.manager']->verifyPassword($_POST['password'], $user->getPassword())){
                    $this->app['user.manager']->login($user);
                
                return $this->redirectRoute('homepage');
                }
            }
            
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
        
        return $this->render(
            'user/login.html.twig',
            ['email' => $email]
        );
    }
    
    public function logoutAction()
    {
        $this->app['user.manager']->logout();
        
        return $this->redirectRoute('homepage');
    }
/*************************************************************/    
/*********************PRISE DE MESURE*************************/
/*************************************************************/
    
    // Mesure Taille & Poids
    public function fillMeasureWeightHeight()
    {
        $user = new User();
        $errors = [];
        
        if(!empty($_POST))
        {    
            $user
                  ->setTaille($_POST['taille'])
                  ->setPoids($_POST['poids'])
                  ;  
            
                if(!is_numeric($_POST['taille']))   
                {
                    $errors['taille'] = 'Merci de ne renseigner que des chiffres';
                }
                
                if(!is_numeric($_POST['poids']))   
                {
                    $errors['poids'] = 'Merci de ne renseigner que des chiffres';
                }
                  
                else
                {
                    $this->addFlashMessage('Vos mesures ont bien été enregistré!');
                    //return
                }
        }
        
        return $this->render
        (
            'custom/mesure_etape1.html.twig',
            [
                'user' => $user
            ]
        );
    }
    
    // Mesure Mesure Tronc (Cou, poitrine, taille, bassin)
    public function fillMeasureTronc()
    {
        $user = new User();
        $errors = [];
        
        if(!empty($_POST))
        {    
            $user
                  ->setTour_cou($_POST['tour_cou'])
                  ->setTour_poitrine($_POST['tour_poitrine'])
                  ->setTour_taille($_POST['tour_taille'])
                  ->setTour_bassin($_POST['tour_bassin'])
                  ;
                  
                if(!is_numeric($_POST['tour_cou']))   
                {
                    $errors['tour_cou'] = 'Merci de ne renseigner que des chiffres';
                }
                
                if(!is_numeric($_POST['tour_poitrine']))   
                {
                    $errors['tour_poitrine'] = 'Merci de ne renseigner que des chiffres';
                }
                
                if(!is_numeric($_POST['tour_taille']))   
                {
                    $errors['tour_taille'] = 'Merci de ne renseigner que des chiffres';
                }
                
                if(!is_numeric($_POST['tour_bassin']))   
                {
                    $errors['tour_bassin'] = 'Merci de ne renseigner que des chiffres';
                }
                
                else
                {
                    $this->addFlashMessage('Vos mesures ont bien été enregistré!');
                    //return
                }
        }
        return $this->render
        (
            'custom/mesure_etape2.html.twig',
            [
                'user' => $user
            ]
        );
    }
    // Mesure Mesure Tronc (Cou, poitrine, taille, bassin)
    public function fillMeasureBras()
    {
        $user = new User();
        $errors = [];
        
        if(!empty($_POST))
        {    
            $user
                  ->setManche_droite($_POST['manche_droite'])
                  ->setManche_gauche($_POST['manche_gauche'])
                  ->setPoignet_droit($_POST['poignet_droit'])
                  ->setPoignet_gauche($_POST['poignet_gauche'])
                  ; 

                if(!is_numeric($_POST['manche_droite']))   
                {
                    $errors['manche_droite'] = 'Merci de ne renseigner que des chiffres';
                }
                if(!is_numeric($_POST['manche_gauche']))   
                {
                    $errors['manche_gauche'] = 'Merci de ne renseigner que des chiffres';
                }
                if(!is_numeric($_POST['manche_gauche']))   
                {
                    $errors['manche_gauche'] = 'Merci de ne renseigner que des chiffres';
                }
                if(!is_numeric($_POST['poignet_droit']))   
                {
                    $errors['poignet_droit'] = 'Merci de ne renseigner que des chiffres';
                }
                if(!is_numeric($_POST['poignet_gauche']))   
                {
                    $errors['poignet_gauche'] = 'Merci de ne renseigner que des chiffres';
                }
                
                else
                {
                    $this->addFlashMessage('Vos mesures ont bien été enregistré!');
                }
        }
        return $this->render
        (
            'custom/mesure_etape3.html.twig',
            [
                'user' => $user
            ]
        );        
    } 
    
    // Mesure Mesure dos (Carrure et Dos)
    public function fillMeasureCarrure()
    {
        $user = new User();
        $errors = [];
        
        if(!empty($_POST))
        {    
            $user
                ->SetCarrure($_POST['carrure'])
                ->setDos($_POST['dos'])
                ;
            
             if(!is_numeric($_POST['carrure']))   
                {
                    $errors['carrure'] = 'Merci de ne renseigner que des chiffres';
                }
                if(!is_numeric($_POST['dos']))   
                {
                    $errors['dos'] = 'Merci de ne renseigner que des chiffres';
                }
                
                else
                {
                    $this->addFlashMessage('Vos mesures ont bien été enregistré!');
                }
        }
        return $this->render
        (
            'custom/mesure_etape4.html.twig',
            [
                'user' => $user
            ]
        );
    }

}  // Fermeture de la class UserController              
               