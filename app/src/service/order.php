<?php

namespace EMBL\Service;

class Order
{

    private $orderRepository = null;

    public function __construct(\EMBL\Repository\Order $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function save($data)
    {
        return $this->orderRepository->save($data);
    }


}