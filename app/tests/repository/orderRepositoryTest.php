<?php


class OrderRepositoryTest extends PHPUnit_Framework_TestCase
{

    public function testClass(){

        $mockedGateway = Mockery::mock('Gateway_Order')->shouldReceive('getById')->andReturn([])->mock();

        $repository = new \EMBL\Repository\Order();
        $repository->setGateway($mockedGateway);

        $this->assertTrue(is_array($repository->getGateway()->getById()));

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

        $repository = new \EMBL\Repository\Order();
        $repository->setGateway($mockedGateway);

        $order = $repository->save($data);

        $this->assertEquals('EMBL\Entity\Order',get_class($order));

        $this->assertEquals(7, $order->getId());
        $this->assertEquals(27, $order->getProductId());
        $this->assertEquals('name', $order->getProductName());
        $this->assertEquals(43, $order->getProductPrice());
        $this->assertEquals('a@a.com', $order->getEmail());
    }

    public function testGetById()
    {
        $mockedGateway = Mockery::mock('Gateway_Product')->shouldReceive('getById')->andReturn([])->mock();

        $repository = new \EMBL\Repository\Product();
        $repository->setGateway($mockedGateway);

        $product = $repository->getById(1);

        $this->assertEquals('EMBL\Entity\Product', get_class($product));


    }

}