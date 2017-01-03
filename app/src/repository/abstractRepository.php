<?php

namespace EMBL\Repository;


abstract class AbstractRepository
{
    protected $gateway = NULL;

    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
        return $this;
    }

    public function getGateway()
    {
        return $this->gateway;
    }

}