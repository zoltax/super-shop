<?php

namespace EMBL\Factory;


class Product {


    /**
     * @param $data
     * @return \EMBL\Entity\Category
     */
    public function fromData($data)
    {
        $entity = new \EMBL\Entity\Product();

        $id = $data['id'] ?? null;
        $name = $data['name'] ?? '';
        $price = $data['price'] ?? 0;
        $image = $data['image'] ?? 'default.png';
        $description = $data['description'] ?? 0;

        return $entity->setName($name)->setImage($image)->setDescription($description)->setId($id)->setPrice($price);
    }

}