<?php


class OrderFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testClass()
    {
        $factory = new \EMBL\Factory\Order();
        $entity = $factory->fromData([]);

        $this->assertEquals('EMBL\Entity\Order',get_class($entity));

    }

    public function testEntityFromData()
    {
        $factory = new \EMBL\Factory\Order();

        $data = [
            'id' => 1,
            'product_id' => 2,
            'product_name' => 'Mac',
            'email' => "a@a.com",
        ];

        $entity = $factory->fromData($data);

        $this->assertEquals(1,$entity->getId());
        $this->assertEquals(2,$entity->getProductId());
        $this->assertEquals("Mac",$entity->getProductName());
        $this->assertEquals("a@a.com",$entity->getEmail());

    }


}