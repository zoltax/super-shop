<?php


class ProductServiceTest extends PHPUnit_Framework_TestCase
{

    public function testClass()
    {
        $mockedGateway = Mockery::mock('Gateway_Product')->shouldReceive('getProductsByCategoryId')->andReturn([])->mock();
        $productRepository = (new \EMBL\Repository\Product())->setGateway($mockedGateway);

        $service = new \EMBL\Service\Product($productRepository);

        $this->assertEquals('EMBL\Service\Product',get_class($service));
    }

    public function testGetCategories()
    {
        $mockedGateway = Mockery::mock('Gateway_Product')->shouldReceive('getProductsByCategoryId')->andReturn([])->mock();
        $productRepository = (new \EMBL\Repository\Product())->setGateway($mockedGateway);

        $service = new \EMBL\Service\Product($productRepository);

        $data = $service->getProductsByCategoryId(1);

        $this->assertEquals([],$data);
    }

    public function testGetById()
    {
        $entity = (new \EMBL\Entity\Product())->asArray();

        $mockedGateway = Mockery::mock('Gateway_Product')->shouldReceive('getById')->andReturn($entity)->mock();
        $productRepository = (new \EMBL\Repository\Product())->setGateway($mockedGateway);

        $service = new \EMBL\Service\Product($productRepository);

        $product = $service->getById(1);

        $this->assertEquals('EMBL\Entity\Product',get_class($product));
    }
}