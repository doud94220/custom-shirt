<?php

use Controller\CustomController;
use Controller\UserController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Request::setTrustedProxies(array('127.0.0.1'));

/*********************FRONT****************************/

/*HOMEPAGE*/

$app
    ->get('/', 'index.controller:indexAction')
    ->bind('homepage')// nom de la route
;

$app
    ->get('/custom', 'custom.controller:listTissu')
    ->bind('etape_1_tissu')
;

$app
   ->get('/custom_bouton', 'custom.controller:listBouton')
   ->bind('etape_2_bouton')
;

$app
   ->get('/custom_col', 'custom.controller:listCol')
   ->bind('etape_3_col')
;

$app
   ->match('/custom_poidstaille', 'user.controller:fillMeasureWeightHeight')
   ->bind('etape_4_poidtaille')
;

$app
   ->match('/custom_tronc', 'user.controller:fillMeasureTronc')
   ->bind('etape_4_tronc')
;

$app
   ->match('/custom_bras', 'user.controller:fillMeasureBras')
   ->bind('etape_4_bras')
;

$app
   ->match('/custom_carrure', 'user.controller:fillMeasureCarrure')
   ->bind('etape_4_carrure')
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



$admin
    ->match('/commande/edit{id_commande}', 'admin.commande.controller:editAction')
    ->value('id', null) // id est optionnel et vaut null par défaut
    ->bind('admin_edit_commande')
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
