<?php

namespace EMBL\Factory;


class Order {


    /**
     * @param $data
     * @return \EMBL\Entity\Order
     */
    public function fromData($data)
    {
        $entity = new \EMBL\Entity\Order();

        $id = $data['id'] ?? null;
        $productId = $data['product_id'] ?? 0;
        $productName = $data['product_name'] ?? '';
        $productPrice = $data['product_price'] ?? 0.0;
        $email = $data['email'] ?? '';

        return $entity->setId($id)->setProductId($productId)->setProductName($productName)->setEmail($email)->setProductPrice($productPrice);
    }


}