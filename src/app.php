<?php

use Controller\CommandeController;
use Controller\Admin\CommandeController as AdminCommandeController;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
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


/* Déclaration des contrôleurs en service */
/* FRONT */
$app['commande.controller'] = function () use ($app)
{
    return new CommandeController($app);
};

/* ADMIN */

/* Déclaration des repositories en service */


return $app;
