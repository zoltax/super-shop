<?php

namespace Em\Controller;

use Silex\Application;

class ProductsController
{

    public function index(Application $app)
    {
        return $app['twig']->render('home.twig');

    }

}