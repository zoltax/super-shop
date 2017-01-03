<?php

namespace EMBL\Repository;

class Category extends AbstractRepository
{

    public function getCategories()
    {

        $data =  $this->getGateway()->getCategories();

        $categories = array_map(function ($el) {
            return (new \EMBL\Factory\Category())->fromData($el);
        }, $data);

        return $categories;

    }

}