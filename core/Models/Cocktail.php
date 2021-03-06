<?php
namespace Models;

class Cocktail extends AbstractModel
{
    protected string $tableName = "cocktails";

    /**
     * Insert request to save a cocktail in the database table "cocktails"
     * 
     * @param string name
     * @param string ingredients
     * @param string image
     * 
     * @return void
     */
    public function save(string $name, string $ingredients, string $image):void
    {
        $requestInsert = $this->pdo->prepare("INSERT INTO {$this->tableName} (name, ingredients, image) VALUES (:name, :ingredients, :image)");

        $requestInsert->execute(
            [
                "name" => $name,
                "ingredients" => $ingredients,
                "image" => $image
            ]
            );
    }
}

?>