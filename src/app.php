<?php

use Repository\CustomRepository;
use Controller\Admin\CommandeController as AdminCommandeController;
use Controller\BasketController;
use Controller\CustomController;
use Controller\CommandeController;
use Controller\DetailCommandeController;
use Controller\UserController;
use Repository\BoutonRepository;
use Repository\ColRepository;
use Repository\CoupeRepository;
use Repository\CommandeRepository;
use Repository\DetailCommandeRepository;
use Repository\ProduitRepository;
use Repository\TissuRepository;
use Repository\UserRepository;
use Service\BasketManager;
use Service\CustomManager;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Controller\IndexController;
use Controller\ProduitController;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\SwiftmailerServiceProvider;
use Silex\Provider\TwigServiceProvider;


$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app->register(new DoctrineServiceProvider());
$app->register(new SwiftmailerServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    $twig->addGlobal('user_manager', $app['user.manager']); // Global est une fonction de TWIG
    $twig->addGlobal('basket_manager', $app['basket.manager']);
    return $twig;
});

$app->register
(
    new DoctrineServiceProvider(), //On rajoute un service au framework
        [
            'db.options' => 
            [
                'driver'    => 'pdo_mysql',
                'host'      => 'localhost',
                'dbname'    => 'custom_shirt',
                'user'      => 'root',
                'password'  => '',
                'charset'   => 'utf8'

            ]
        ]
);

$app->register(new SessionServiceProvider()); //Permet d'utiliser $app['session']

/* Déclaration des MANAGERS */

$app['user.manager'] = function () use ($app)
{
    return new UserManager($app['session']);
};


$app['basket.manager'] = function() use ($app)
{
   return new BasketManager($app['session']);
};
            

$app['index.controller'] = function () use ($app) {

    return new IndexController($app);

};


$app['produit.controller'] = function () use ($app) {

    return new ProduitController($app);


$app['basket.manager'] = function() use ($app)
{
   return new BasketManager($app['session']);
};
            

$app['index.controller'] = function () use ($app) {

    return new IndexController($app);

};

$app['produit.repository'] = function () use ($app) {

    return new ProduitRepository($app['db']);

};


/* Déclaration des contrôleurs en service */
/* FRONT */
$app['commande.controller'] = function () use ($app)
{
    return new CommandeController($app);
};

$app['detail.commande.controller'] = function () use ($app){
    return new DetailCommandeController($app);
};

$app['user.controller'] = function () use ($app){
    return new UserController($app);
};

$app['basket.controller'] = function() use ($app)
{
    return new BasketController($app);
};

$app['detail.commande.controller'] = function () use ($app){
    return new DetailCommandeController($app);
};


$app['user.controller'] = function () use ($app){
    return new UserController($app);
};

/* ADMIN */
$app['admin.commande.controller'] = function () use ($app)
{
    return new CommandeController($app);
};

$app['custom.controller'] = function() use ($app)
{
    return new CustomController($app);
};

            
/* Déclaration des repositories en service */


$app['custom.repository'] = function() use ($app) {
    return new CustomRepository($app);

$app['tissu.repository'] = function() use ($app)
{
    return new TissuRepository($app['db']);
};

$app['col.repository'] = function() use ($app)
{
    return new ColRepository($app['db']);
};

$app['coupe.repository'] = function() use ($app)
{
    return new CoupeRepository($app['db']);
};

$app['commande.repository'] = function () use ($app)
{
    return new CommandeRepository($app['db']);

};

$app['produit.repository'] = function () use ($app) {

    return new ProduitRepository($app['db']);
};

$app['detail.commande.repository'] = function () use ($app)
{
    return new DetailCommandeRepository($app['db']);
};

$app['user.repository'] = function () use ($app){
    return new UserRepository($app['db']);
};

return $app;
