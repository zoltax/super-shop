<?php

namespace EMBL\Gateway;

class Orders extends AbstractGateway {

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

    public function save($data)
    {

        $sql = "INSERT INTO orders(`product_id`,`product_name`,`product_price`,`email`) VALUES(:product_id,:product_name,:product_price,:email)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(
            [
                'product_id' => $data['product_id'],
                'product_name' => $data['product_name'],
                'product_price' => $data['product_price'],
                'email' => $data['email']
            ]
        );

        $id = $this->pdo->lastInsertId();

        $data['id'] = $id;

        return $data;
    }



}