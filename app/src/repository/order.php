<?php

namespace EMBL\Repository;

class Order extends AbstractRepository
{

    public function save($data)
    {

        $order = (new \EMBL\Factory\Order())->fromData($data);

        $savedOrderData = $this->getGateway()->save($order->asArray());

        $order = (new \EMBL\Factory\Order())->fromData($savedOrderData);

        return $order;

    }

    public function getById($id)
    {
    }

}