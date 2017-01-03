<?php

namespace EMBL\Gateway;

class Products extends AbstractGateway {

    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :product_id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(
            [
                'product_id' => $id
            ]
        );

        $data = $statement->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function getProductsByCategoryId($id)
    {

        $sql = "SELECT * FROM products WHERE category_id = :category_id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(
            [
                'category_id' => $id
            ]
        );

        $data = $statement->fetchAll(\PDO::FETCH_ASSOC);


        return $data;
    }



}