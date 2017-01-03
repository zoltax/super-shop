<?php

namespace EMBL\Entity;

class Order extends AbstractEntity
{

    /**
     * @var
     */
    private $productId = NULL;

    private $productPrice = NULL;

    /**
     * @var string
     */
    private $productName = '';

    private $email = NULL;

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param float $productPrice
     * @return $this
     *
     */
    public function setProductPrice(float $productPrice)
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return $this
     */
    public function setProductName(string $productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }


    public function asArray()
    {
        return [
            'id'            => $this->getId(),
            'product_name'  => $this->getProductName(),
            'product_id'    => $this->getProductId(),
            'product_price' => $this->getProductPrice(),
            'email'         => $this->getEmail(),
        ];
    }


}