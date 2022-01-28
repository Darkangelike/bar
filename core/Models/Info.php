<?php

namespace Models;

require_once "core/Models/AbstractModel.php";

class Info extends AbstractModel
{
    protected string $tableName = "infos";

    /**
     * Inserts a new info in the database
     * 
     * @param string $description
     * 
     * @return void
     */
    public function save(string $description):void
    {
        $sql = $this->pdo->prepare("INSERT INTO {$this->tableName} (description) VALUES (:description)");
        $sql->execute([
            "description" => $description
        ]);
    }

    /**
     * 
     * Edit an information's description using its associated id
     * 
     * @param integer $id
     * @param string $description
     * 
     * @return void
     */
    public function edit(int $id, string $description):void
    {
        $sql = $this->pdo->prepare("UPDATE {$this->tableName} SET description = :description WHERE id = :id");
        $sql->execute([
            "id" => $id,
            "description" => $description
        ]);
    }
}

?>