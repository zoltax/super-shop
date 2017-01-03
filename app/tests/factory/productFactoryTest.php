<?php


class ProductFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testClass()
    {
        $factory = new \EMBL\Factory\Product();
        $entity = $factory->fromData([]);

        $this->assertEquals('EMBL\Entity\Product',get_class($entity));

    }

    public function testEntityFromData()
    {
        $factory = new \EMBL\Factory\Product();

        $data = [
            'id' => 1,
            'name' => 'Filip',
            'image' => 'filip.png',
            'description' => "a",
            'price' => 23,
        ];

        $entity = $factory->fromData($data);

        $this->assertEquals(1,$entity->getId());
        $this->assertEquals("Filip",$entity->getName());
        $this->assertEquals("filip.png",$entity->getImage());
        $this->assertEquals("a",$entity->getDescription());
        $this->assertEquals(23,$entity->getPrice());

    }


}