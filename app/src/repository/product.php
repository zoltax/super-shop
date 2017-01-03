<?php

namespace EMBL\Repository;

class Product extends AbstractRepository
{

    public function getProductsByCategoryId($id)
    {

        $data =  $this->getGateway()->getProductsByCategoryId($id);

        $categories = array_map(function ($el) {
            return (new \EMBL\Factory\Product())->fromData($el);
        }, $data);

        return $categories;

    }

    public function getById($id)
    {
        $data = $this->getGateway()->getById($id);

        return (new \EMBL\Factory\Product())->fromData($data);
    }

}