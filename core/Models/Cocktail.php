<?php
namespace Models;

require_once dirname(__FILE__)."/Model.php";

class Cocktail extends Model
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