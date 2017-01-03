<?php

class EntityTest extends PHPUnit_Framework_TestCase
{
    public function testClass()
    {
        $class = new \EMBL\Entity\Category();
        $this->assertNull($class->getId());

        $id = 7;

        $class->setId($id);
        $this->assertEquals($class->getId(),$id);

    }

    public function testName()
    {
        $class = new \EMBL\Entity\Category();
        $name = "test";

        $this->assertNull($class->getName());
        $class->setName($name);
        $this->assertEquals($class->getName(),$name);
    }

    public function testImage()
    {
        $class = new \EMBL\Entity\Category();
        $this->assertEquals($class->getImage(),'default.png');

        $image = "image.png";

        $class->setImage($image);
        $this->assertEquals($class->getImage(),$image);
    }


    public function testProductCount()
    {
        $class = new \EMBL\Entity\Category();
        $this->assertEquals($class->getProductCount(),0);

        $productCount = 17;

        $class->setProductCount($productCount);
        $this->assertEquals($class->getProductCount(),$productCount);
    }

    public function testAsArray()
    {
        $class = new \EMBL\Entity\Category();
        $this->assertTrue(is_array($class->asArray()));

        $data = $class->asArray();

        $this->assertEquals(count($data),3);

        $this->assertArrayHasKey('name',$data);
        $this->assertArrayHasKey('image',$data);
        $this->assertArrayHasKey('product_count',$data);

        $class->setName("Filip");
        $class->setImage("filip.png");
        $class->setProductCount(16);

        $expected = [
            'name' => "Filip",
            'image' => "filip.png",
            'product_count' => 16,
        ];

        $this->assertEquals($expected, $class->asArray());
    }


}
