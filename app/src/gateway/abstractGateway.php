<?php

namespace EMBL\Gateway;

abstract class AbstractGateway
{

    protected $pdo;

    public function init($config) {

        $connectionString = sprintf("mysql:host=%s;dbname=%s;port=3306;charset=utf8",$config['host'],$config['dbname']);
        $this->pdo = new \PDO($connectionString,$config['username'],$config['password']);

    }

    public abstract function getById($id);

    /// ...
}