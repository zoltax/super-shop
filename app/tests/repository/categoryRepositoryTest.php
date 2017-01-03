<?php


class CategoryRepositoryTest extends PHPUnit_Framework_TestCase
{

    public function testClass(){

        $mockedGateway = Mockery::mock('Gateway_Category')->shouldReceive('getCategories')->andReturn([])->mock();

        $repository = new \EMBL\Repository\Category();
        $repository->setGateway($mockedGateway);

        $this->assertTrue(is_array($repository->getGateway()->getCategories()));

    }

}