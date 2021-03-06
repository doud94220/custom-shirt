<?php

use Controller\CustomController;
use Controller\UserController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Request::setTrustedProxies(array('127.0.0.1'));

/*********************FRONT****************************/


// Route du panier (basket en UK) en front
$app
    ->match('/basket', 'basket.controller:consultAction')
    ->bind('basket');

/*HOMEPAGE*/

$app
    ->get('/', 'index.controller:indexAction')
    ->bind('homepage')// nom de la route
;

$app
    ->get('/ajax_api', 'produit.controller:ajaxApi')
    ->bind('ajax_api')// nom de la route
;

$app
    ->match('/custom', 'custom.controller:listTissu')
    ->bind('etape_1_tissu')
;

$app

   ->match('/custom_bouton', 'custom.controller:listBouton')
   ->bind('etape_2_bouton')
;

    ->get('/template/{id}', 'index.controller:idAction')
    ->bind('show_product')// nom de la route
;

$app
   ->match('/custom_col', 'custom.controller:listCol')
   ->bind('etape_3_col')
;

$app
   ->match('/custom_coupe', 'custom.controller:listCoupe')
   ->bind('etape_4_coupe')
;

$app
   ->match('/custom_recap', 'custom.controller:showCustom')
   ->bind('custom_recap')
;

$app
   ->match('/custom_poidstaille', 'user.controller:fillMeasureWeightHeight')
   ->bind('etape_5_poidstaille')
;

$app
   ->match('/custom_tronc', 'user.controller:fillMeasureTronc')
   ->bind('etape_5_tronc')
;

$app
   ->match('/custom_bras', 'user.controller:fillMeasureBras')
   ->bind('etape_5_bras')
;

$app
   ->match('/custom_carrure', 'user.controller:fillMeasureCarrure')
   ->bind('etape_5_carrure')
;

/* UTILISATEUR */

$app
    ->match('/inscription', 'user.controller:registerAction')
    ->bind('register')
;

$app
    ->match('/connexion', 'user.controller:loginAction')
    ->bind('login')
;

$app
    ->get('/deconnexion', 'user.controller:logoutAction')
    ->bind('logout')
;

$app
    ->match('/profile', 'user.controller:showProfile')
    ->bind('profile')
;

$app
    ->get('/profile', 'commande.controller:showAction')
    ->bind('profile_commandes')
;

$app
    ->get('/profile/suivi_commandes', 'commande.controller:followAction')
    ->bind('suivi_commande')
;

$app
    ->match('/profile/delete_commande/{id}', 'commande.controller:deleteAction')
    ->bind('delete_commande')
;

$app
    ->match('/profile/return_commande/{id}', 'commande.controller:returnAction')
    ->bind('return_commande')
;


/********************* ADMIN **************************/
// crée un groupe de routes pour la partie admin
$admin = $app['controllers_factory'];

//protection de l'accès au backoffice
$admin->before(function () use ($app){
    if(!$app['user.manager']->isAdmin()){
        $app->abort(403, 'Accès refusé');
    }
});


// toutes les routes définies dans le groupe admin
// auront le préfixe /admin
$app->mount('/admin', $admin);

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;

// gestion des commandes -------------------------------------- 
$admin
    ->get('/commandes', 'admin.commande.controller:listAction')
    ->bind('admin_commandes')
;

$admin
    ->match('/commande/edit/{id}', 'admin.commande.controller:editAction')
    ->bind('admin_edit_commande')
;

$admin
    ->match('/commande/delete/{id}', 'admin.commande.controller:deleteAction')
    ->bind('admin_delete_commande')
;

$admin
    ->get('/commande/details{id_commande}', 'admin.details_commande.controller:listAction')
    ->bind('admin_details_commande')
;

//-------------------------------------------------------------------------//
$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
