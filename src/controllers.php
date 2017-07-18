<?php

use Controller\CustomController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Request::setTrustedProxies(array('127.0.0.1'));

/*********************FRONT****************************/


// Route du panier (basket en UK) en front
$app
       ->match('/basket', 'basket.controller:consultAction')
       ->bind('basket_consult');

$app
       ->match('/basket/incrementBasket/{idProduitEnSession}', 'basket.controller:incrementAction')
       //->value('idProduitEnSession')
       ->bind('basket_increment');

$app
       ->match('/basket/decrementBasket/{idProduitEnSession}', 'basket.controller:decrementAction')
       ->bind('basket_decrement');

$app
       ->match('/basket/delete/{idProduitEnSession}', 'basket.controller:deleteAction')
       ->bind('basket_delete');


/*HOMEPAGE*/

$app
    ->get('/', 'index.controller:indexAction')
    ->bind('homepage')// nom de la route
;

$app

    ->get('/ajax_api', 'index.controller:ajaxApi')
    ->bind('ajax_api')// nom de la route
;

$app
    ->get('/custom', 'custom.controller:listTissu')
    ->bind('etape_1_tissu')
;

$app
   ->get('/custom_bouton', 'custom.controller:listBouton')
   ->bind('etape_2_bouton')
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
    ->match('/profile/delete_commande', 'commande.controller:deleteAction')
    ->bind('delete_commande')
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

$admin
    ->get('/commandes', 'admin.commande.controller:listAction')
    ->bind('admin_commandes')
;

$admin
    ->match('/commande/edit{id_commande}', 'admin.commande.controller:editAction')
    ->bind('admin_edit_commande')
;

$admin
    ->match('/commande/delete{id_commande}', 'admin.commande.controller:deleteAction')
    ->bind('admin_delete_commande')
;

$admin
    ->get('/commande/details{id_commande}', 'admin.details_commande.controller:listAction')
    ->bind('admin_details_commande')
;

//-------------------------------------------------------------------------//
$app->error(function (Exception $e, Request $request, $code) use ($app) {
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
