<?php

require_once "../vendor/autoload.php";

$app = new \Silex\Application();

$app['debug'] = true;

$app['database.username'] = 'shop';
$app['database.password'] = 'shop';
$app['database.host'] = '127.0.0.1';
$app['database.dbname'] = 'shop';

// di

$config = [
    'username' => $app['database.username'],
    'password' => $app['database.password'],
    'host' => $app['database.host'],
    'dbname' => $app['database.dbname'],
];

// category service di

$categoriesGateway = new \EMBL\Gateway\Categories();
$categoriesGateway->init($config);

$categoriesRepository = new \EMBL\Repository\Category();
$categoriesRepository->setGateway($categoriesGateway);

$categoriesService = new \EMBL\Service\Category($categoriesRepository);

$app['service.category'] = $categoriesService;

// product service di

$productGateway = new \EMBL\Gateway\Products();
$productGateway->init($config);

$productRepository = new \EMBL\Repository\Product();
$productRepository->setGateway($productGateway);

$productService = new \EMBL\Service\Product($productRepository);

$app['service.product'] = $productService;

// order service di

$orderGateway = new \EMBL\Gateway\Orders();
$orderGateway->init($config);

$orderRepository = new \EMBL\Repository\Order();
$orderRepository->setGateway($orderGateway);

$orderService = new \EMBL\Service\Order($orderRepository);

$app['service.order'] = $orderService;

// routing

$app->get('/', 'EM\Controller\CategoriesController::home');
$app->get('/category/{id}', 'EM\Controller\CategoriesController::index');
$app->get('/product', 'EM\Controller\ProductsController::index');
$app->get('/checkout/{id}', 'EM\Controller\CheckoutsController::index');
$app->post('/order', 'EM\Controller\OrdersController::index');

// view

$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__.'/views'
]);

// show time!

$app->run();

