<?php

namespace EMBL\Factory;


class Category {


    /**
     * @param $data
     * @return \EMBL\Entity\Category
     */
    public function fromData($data)
    {
        $entity = new \EMBL\Entity\Category();

        $name = $data['name'] ?? '';
        $image = $data['image'] ?? 'default.png';
        $productCount = $data['product_count'] ?? 0;
        $id = $data['id'] ?? null;

        return $entity->setName($name)->setImage($image)->setProductCount($productCount)->setId($id);
    }

}