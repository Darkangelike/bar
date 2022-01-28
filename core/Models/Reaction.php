<?php
namespace Models;

class Reaction extends AbstractModel
{
    protected string $tableName = "reactions";


    /**
     * Insert into REACTIONS table a new reaction
     * 
     * @param string $description
     * @param integer $info_id
     * 
     * @return @void
     */
    public function save(string $description, int $info_id):void
    {
        $sql = $this->pdo->prepare("INSERT INTO {$this->tableName} (description, info_id) VALUES (:description, :info_id)");
        $sql->execute(
            [
                "description" => $description,
                "info_id" => $info_id
            ]
        );
    }

    /**
     * Update a reaction in the database
     * 
     * @param integer $id
     * @param string $description
     * 
     * @return void
     */
    public function edit(int $id, string $description):void
    {
        $sql = $this->pdo->prepare("UPDATE {$this->tableName} SET description = :description WHERE id = :id");
        $sql->execute(
            [
                "description" => $description,
                "id" => $id
            ]
        );
    }
}
?>