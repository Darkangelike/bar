<?php

namespace Models;

require_once dirname(__FILE__)."/../libraries/db.php";
require_once "core/Database/PdoMySQL.php";

abstract class AbstractModel
{
    protected string $tableName;
    protected $pdo;

    public function __construct()
    {
        $this->pdo = \Database\PdoMySQL::getPdo();
    }

/**
 * Find an element using its id in the "$this->tableName" table in the database
 * Return an array containing only one element
 * 
 * @param integer $id
 * @return array|bool
 */
public function findById(int $id):array | bool
{
    $requestOne = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE id= :id");
    $requestOne->execute(
        [
        "id" => $id
    ]
    );
    $element = $requestOne->fetch();
    return $element;
}

/**
 * Returns an array of all the elements
 * all the fields in the sql table {$this->tableName}
 * 
 * @return array $elements 
 */
public function findAll():array
{
    $requestAll = $this->pdo->query("SELECT * FROM {$this->tableName}");
    $elements = $requestAll->fetchAll();
    return $elements;
}

/**
 * delete an element from the table using its associated ID
 * 
 * @param integer $id
 * 
 */
public function remove(int $id):void
{
    $deleteRequest = $this->pdo->prepare("DELETE FROM {$this->tableName} WHERE id=:id");
    $deleteRequest->execute(
        [
            "id" => $id
        ]
        );
}

}

?>