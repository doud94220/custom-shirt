<?php

use Controller\Admin\CommandeController as AdminCommandeController;
use Controller\CommandeController;
use Controller\DetailCommandeController;
use Controller\UserController;
use Repository\CommandeRepository;
use Repository\DetailCommandeRepository;
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



/* ADMIN */
$app['admin.commande.controller'] = function () use ($app)
{
    return new CommandeController($app);
};


/* Déclaration des repositories en service */
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
