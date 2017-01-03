<?php

namespace EMBL\Gateway;

class Categories extends AbstractGateway {

    public function getById($id)
    {
    }

    public function getCategories()
    {
        $sql = "SELECT * FROM categories";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }


}