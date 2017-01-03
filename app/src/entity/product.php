<?php

namespace EMBL\Entity;

class Product extends AbstractEntity
{

    /**
     * @var
     */
    private $name;

    private $image = 'default.png';

    /**
     * @var int
     */
    private $description = '';

    private $price = 0;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName( $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function asArray()
    {
        return [
            'id'            => $this->getId(),
            'name'          => $this->getName(),
            'image'         => $this->getImage(),
            'description'   => $this->getDescription(),
            'price'         => $this->getPrice(),
        ];
    }


}