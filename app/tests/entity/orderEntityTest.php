<?php

class OrderEntityTest extends PHPUnit_Framework_TestCase
{
    public function testClass()
    {
        $class = new \EMBL\Entity\Order();
        $this->assertNull($class->getId());

        $id = 7;

        $class->setId($id);
        $this->assertEquals($class->getId(),$id);

    }

    public function testProductId()
    {
        $class = new \EMBL\Entity\Order();
        $productId = 3;

        $this->assertNull($class->getProductId());
        $class->setProductId($productId);
        $this->assertEquals($class->getProductId(),$productId);
    }

    public function testOrderProductName()
    {
        $class = new \EMBL\Entity\Order();
        $this->assertEquals($class->getProductName(),'');

        $productName = "Mac";

        $class->setProductName($productName);
        $this->assertEquals($class->getProductName(),$productName);
    }

    public function testOrderProductId()
    {
        $class = new \EMBL\Entity\Order();
        $this->assertNull($class->getProductId());

        $productId = 7;

        $class->setProductId($productId);
        $this->assertEquals($class->getProductId(),$productId);
    }


    public function testOrderEmail()
    {
        $class = new \EMBL\Entity\Order();
        $this->assertNull($class->getEmail());

        $email = "filipkulig@gmail.com";

        $class->setEmail($email);
        $this->assertEquals($class->getEmail(),$email);
    }

    public function testOrderProductPrice()
    {
        $class = new \EMBL\Entity\Order();
        $this->assertNull($class->getProductPrice());

        $price = 23;

        $class->setProductPrice($price);
        $this->assertEquals($class->getProductPrice(),$price);
    }

    public function testAsArray()
    {
        $class = new \EMBL\Entity\Order();
        $this->assertTrue(is_array($class->asArray()));

        $data = $class->asArray();

        $this->assertEquals(count($data),5);

        $this->assertArrayHasKey('id',$data);
        $this->assertArrayHasKey('product_name',$data);
        $this->assertArrayHasKey('product_id',$data);
        $this->assertArrayHasKey('product_price',$data);
        $this->assertArrayHasKey('email',$data);

        $class->setId(1);
        $class->setProductPrice(20);
        $class->setProductName("Mac");
        $class->setProductId(7);
        $class->setEmail("a@a.com");

        $expected = [
            'id' => 1,
            'product_price' => 20,
            'product_name' => "Mac",
            'product_id' => 7,
            'email' => "a@a.com",
        ];

        $this->assertEquals($expected, $class->asArray());
    }


}
