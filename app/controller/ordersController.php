<?php

namespace Em\Controller;

use EMBL\Entity\Order;
use EMBL\Entity\Product;
use EMBL\Helpers\Email;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class OrdersController
{

    public function index(Application $app, Request $request)
    {

        $emailProvider = new Email();

        $productService = $app['service.product'];
        $orderService = $app['service.order'];

        $productId = $request->request->get('id');
        $email = $request->request->get('email');

        /** @var Product $product */
        $product = $productService->getById($productId);

        $orderData = [
            'product_name' => $product->getName(),
            'product_price' => $product->getPrice(),
            'product_id' => $product->getId(),
            'email' => $email,
        ];

        /** @var Order $order */
        $order = $orderService->save($orderData);

        $emailProvider->send($order->getEmail(),$order->getProductName(), $order->getProductPrice());

        return $app['twig']->render('order.twig',
            [
                'order' => $order
            ]
        );

    }

}