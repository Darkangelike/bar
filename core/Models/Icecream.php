<?php

namespace Models;

require_once dirname(__FILE__)."/AbstractModel.php";

class Icecream extends AbstractModel
{
    protected string $tableName = "icecreams";

    public function save(string $description)
    {
        $insertRequest = $this->pdo->prepare("INSERT INTO {$this->tableName} (description) VALUES (:description)");
        $insertRequest->execute([
            "description" => $description
        ]);
    }
}

?>