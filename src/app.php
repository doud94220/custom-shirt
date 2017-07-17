<?php

use Controller\BasketController;
use Controller\CommandeController;
use Controller\CustomController;
use Controller\DetailCommandeController;
use Controller\IndexController;
use Controller\UserController;
use Repository\BoutonRepository;
use Repository\CommandeRepository;
use Repository\CustomRepository;
use Repository\DetailCommandeRepository;
use Repository\ProduitRepository;
use Repository\TissuRepository;
use Repository\UserRepository;
use Service\CustomManager;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
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

$app['user.manager'] = function () use ($app)
{
    return new UserManager($app['session']);
};

$app['custom.manager'] = function () use ($app)
{
    return new CustomManager($app['session']);
};

$app['index.controller'] = function () use ($app) {

    return new IndexController($app);

};

$app['produit.repository'] = function () use ($app) {

    return new ProduitRepository($app['db']);

};

/* Déclaration des contrôleurs en service */
/* FRONT */

$app['basket.controller'] = function() use ($app)
{
    return new BasketController($app);
};


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

$app['custom.repository'] = function() use ($app)
{
    return new CustomRepository($app['db']);
};

$app['bouton.repository'] = function() use ($app)
{
    return new BoutonRepository($app['db']);
};

$app['tissu.repository'] = function() use ($app)
{
    return new TissuRepository($app['db']);
};

$app['commande.repository'] = function () use ($app)
{
    return new CommandeRepository($app['db']);

};

$app['detail.commande.repository'] = function () use ($app)
{
    return new DetailCommandeRepository($app['db']);
};

$app['user.repository'] = function () use ($app){
    return new UserRepository($app['db']);
};

return $app;
