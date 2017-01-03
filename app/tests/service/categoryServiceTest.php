<?php


class CategoryServiceTest extends PHPUnit_Framework_TestCase
{

    public function testClass()
    {
        $mockedGateway = Mockery::mock('Gateway_Category')->shouldReceive('getCategories')->andReturn([])->mock();
        $categoryRepository = (new \EMBL\Repository\Category())->setGateway($mockedGateway);

        $service = new \EMBL\Service\Category($categoryRepository);

        $this->assertEquals('EMBL\Service\Category',get_class($service));
    }

    public function testGetCategories()
    {
        $mockedGateway = Mockery::mock('Gateway_Category')->shouldReceive('getCategories')->andReturn([])->mock();
        $categoryRepository = (new \EMBL\Repository\Category())->setGateway($mockedGateway);

        $service = new \EMBL\Service\Category($categoryRepository);

        $data = $service->getCategories();

        $this->assertEquals([],$data);
    }
}