<?php


class ProductRepositoryTest extends PHPUnit_Framework_TestCase
{

    public function testClass(){

        $mockedGateway = Mockery::mock('Gateway_Product')->shouldReceive('getProductsByCategoryId')->andReturn([])->mock();

        $repository = new \EMBL\Repository\Product();
        $repository->setGateway($mockedGateway);

        $this->assertTrue(is_array($repository->getGateway()->getProductsByCategoryId()));

    }

    public function testGetProductsByCategoryId()
    {
        $data = [
            0 => [
                'name' => 'name',
                'image' => 'image',
                'description' => 'desc',
                'price' => 23,
                'id' => 7
            ]
        ];

        $mockedGateway = Mockery::mock('Gateway_Product')->shouldReceive('getProductsByCategoryId')->andReturn($data)->mock();

        $repository = new \EMBL\Repository\Product();
        $repository->setGateway($mockedGateway);

        $products = $repository->getProductsByCategoryId(1);

        $this->assertEquals('EMBL\Entity\Product',get_class($products[0]));

        $this->assertEquals('name', $products[0]->getName());
        $this->assertEquals('image', $products[0]->getImage());
        $this->assertEquals('desc', $products[0]->getDescription());
        $this->assertEquals(23, $products[0]->getPrice());
        $this->assertEquals(7, $products[0]->getId());
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