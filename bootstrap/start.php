<?php
require_once(__DIR__."/../vendor/autoload.php");

define('ROOT_PATH',__DIR__."/../");

$dotenv = new Dotenv\Dotenv(ROOT_PATH);
$dotenv->load();

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
// Service Contaner
$container = new \Slim\Container($configuration);

$container['config'] = function($c){
    return new \Noodlehaus\Config(ROOT_PATH.'config/app.php');
};

// Register Twig View helper
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(ROOT_PATH.'app/views', [
        //'cache' => '../cache'
    ]);

    // Instantiate and add Slim specific extension
    $view->addExtension(new Slim\Views\TwigExtension(
        $c['router'],
        $c['request']->getUri()
    ));

    return $view;
};

$app = new \Slim\App($container);

// Require the app routes
require_once(ROOT_PATH."app/routes.php");


$app->run();







use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
	'driver' => 'sqlite',
	'database' => __DIR__.'/../storage/database/database.sqlite',
	'prefix' => ''
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();



