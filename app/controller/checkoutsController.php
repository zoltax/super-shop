<?php

namespace Em\Controller;

use Silex\Application;

class CheckoutsController
{

    public function index($id, Application $app)
    {

        $productService = $app['service.product'];
        $product = $productService->getById($id);

        return $app['twig']->render('checkout.twig',
            [
                'product' => $product,
                'id' => $id,
            ]
        );


    }

}