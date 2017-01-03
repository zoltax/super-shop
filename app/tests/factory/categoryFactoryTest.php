<?php


class CategoryFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testClass()
    {
        $factory = new \EMBL\Factory\Category();
        $entity = $factory->fromData([]);

        $this->assertEquals('EMBL\Entity\Category',get_class($entity));

    }

    public function testEntityFromData()
    {
        $factory = new \EMBL\Factory\Category();

        $data = [
            'name' => 'Filip',
            'image' => 'filip.png',
            'product_count' => 7
        ];

        $entity = $factory->fromData($data);

        $this->assertEquals("Filip",$entity->getName());
        $this->assertEquals("filip.png",$entity->getImage());
        $this->assertEquals(7,$entity->getProductCount());

    }


}