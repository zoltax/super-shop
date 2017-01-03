<?php

namespace EMBL\Entity;

class Category extends AbstractEntity
{

    /**
     * @var
     */
    private $name;

    private $image = 'default.png';

    /**
     * @var int
     */
    private $productCount = 0;

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
    public function setName($name)
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
     * @return int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     * @return $this
     */
    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
        return $this;
    }

    public function asArray()
    {
        return [
            'name'          => $this->getName(),
            'image'         => $this->getImage(),
            'product_count' => $this->getProductCount(),
        ];
    }


}