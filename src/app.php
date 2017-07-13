<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
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
            
/* Déclaration des contrôleurs en service */

// Controleur du panier
$app['basket.controller'] = function() use ($app)
{
    return new BasketController($app);
};
            
/* Déclaration des repositories en service */


return $app;
