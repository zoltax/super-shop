<?php

namespace Em\Controller;

use EMBL\Gateway\Categories;
use EMBL\Repository\Category;
use Silex\Application;

class CategoriesController
{

    public function home(Application $app)
    {
        $categoriesService = $app['service.category'];
        $categories = $categoriesService->getCategories();

        return $app['twig']->render('home.twig',['categories' => $categories]);
    }

    public function index($id, Application $app)
    {

        $categoriesService = $app['service.category'];
        $categories = $categoriesService->getCategories();

        $productService = $app['service.product'];
        $products = $productService->getProductsByCategoryId($id);

        return $app['twig']->render('categories.twig',
            [
                'categories' => $categories,
                'products' => $products,
                'id' => $id,
            ]
        );

    }

}