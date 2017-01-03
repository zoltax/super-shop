<?php

class ProductEntityTest extends PHPUnit_Framework_TestCase
{
    public function testClass()
    {
        $class = new \EMBL\Entity\Product();
        $this->assertNull($class->getId());

        $id = 7;

        $class->setId($id);
        $this->assertEquals($class->getId(),$id);

    }

    public function testName()
    {
        $class = new \EMBL\Entity\Product();
        $name = "test";

        $this->assertNull($class->getName());
        $class->setName($name);
        $this->assertEquals($class->getName(),$name);
    }

    public function testImage()
    {
        $class = new \EMBL\Entity\Product();
        $this->assertEquals($class->getImage(),'default.png');

        $image = "image.png";

        $class->setImage($image);
        $this->assertEquals($class->getImage(),$image);
    }


    public function testDescription()
    {
        $class = new \EMBL\Entity\Product();
        $this->assertEquals($class->getDescription(),"");

        $desc = "asdsad";

        $class->setDescription($desc);
        $this->assertEquals($class->getDescription(),$desc);
    }


    public function testPrice()
    {
        $class = new \EMBL\Entity\Product();
        $this->assertEquals($class->getprice(),0);

        $desc = 23.33;

        $class->setPrice($desc);
        $this->assertEquals($class->getPrice(),$desc);
    }

    public function testAsArray()
    {
        $class = new \EMBL\Entity\Product();
        $this->assertTrue(is_array($class->asArray()));

        $data = $class->asArray();

        $this->assertEquals(count($data),5);

        $this->assertArrayHasKey('id',$data);
        $this->assertArrayHasKey('name',$data);
        $this->assertArrayHasKey('image',$data);
        $this->assertArrayHasKey('description',$data);

        $class->setId(1);
        $class->setName("Filip");
        $class->setImage("filip.png");
        $class->setDescription("a");
        $class->setPrice(24.2);

        $expected = [
            'id' => 1,
            'name' => "Filip",
            'image' => "filip.png",
            'description' => "a",
            'price' => 24.2,
        ];

        $this->assertEquals($expected, $class->asArray());
    }


}
