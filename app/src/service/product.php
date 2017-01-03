<?php

namespace EMBL\Service;

class Product
{

    private $productRepository = null;

    public function __construct(\EMBL\Repository\Product $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductsByCategoryId($id)
    {
        return $this->productRepository->getProductsByCategoryId($id);
    }

    public function getById($id)
    {
        return $this->productRepository->getById($id);
    }

}