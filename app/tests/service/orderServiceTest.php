<?php


class OrderServiceTest extends PHPUnit_Framework_TestCase
{

    public function testClass()
    {

        $mockedGateway = Mockery::mock('Gateway_Order')->shouldReceive('save')->andReturn([])->mock();
        $productRepository = (new \EMBL\Repository\Product())->setGateway($mockedGateway);

        $service = new \EMBL\Service\Product($productRepository);

        $this->assertEquals('EMBL\Service\Product',get_class($service));
    }

    public function testSaveOrder()
    {

        $data = [
            'id' => 7,
            'product_id' => 27,
            'product_name' => 'name',
            'product_price' => 43,
            'email' => 'a@a.com',
        ];

        $mockedGateway = Mockery::mock('Gateway_Order')->shouldReceive('save')->andReturn($data)->mock();
        $orderRepository = (new \EMBL\Repository\Order())->setGateway($mockedGateway);

        $service = new \EMBL\Service\Order($orderRepository);

        $order = $service->save($data);


        $this->assertEquals('EMBL\Entity\Order',get_class($order));

        $this->assertEquals(7, $order->getId());
        //...

    }

//    public function testGetById()
//    {
//        $entity = (new \EMBL\Entity\Product())->asArray();
//
//        $mockedGateway = Mockery::mock('Gateway_Product')->shouldReceive('getById')->andReturn($entity)->mock();
//        $productRepository = (new \EMBL\Repository\Product())->setGateway($mockedGateway);
//
//        $service = new \EMBL\Service\Product($productRepository);
//
//        $product = $service->getById(1);
//
//        $this->assertEquals('EMBL\Entity\Product',get_class($product));
//    }
}