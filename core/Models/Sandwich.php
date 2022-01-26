<?php

namespace Models;

require_once "core/Models/AbstractModel.php";

class Sandwich extends AbstractModel
{
    protected string $tableName = "sandwiches";
    
    /**
     * Insert a new sandwich in the database using the user's submitted form description and price
     * 
     * @param string $description
     * @param integer $price
     * 
     * @return void
     */
    public function save(string $description, int $price):void
    {
        $sql = $this->pdo->prepare("INSERT INTO {$this->tableName} (description, price) VALUES (:description, :price)");
        $sql->execute([
            "description" => $description,
            "price" => $price
        ]);
    }

    /**
     * Update a sandwich in the databse by using its ID and setting a new description and price
     * 
     * @param integer $id
     * @param string $description
     * @param integer $price
     */
    public function edit(int $id, string $description, int $price):void
    {
        $sql = $this->pdo->prepare("UPDATE {$this->tableName} SET description = :description, price = :price WHERE id = :id");
        $sql->execute(
            [
                "id" => $id,
                "description" => $description,
                "price" => $price
            ]
            );
    }
}

?>