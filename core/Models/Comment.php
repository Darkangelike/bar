<?php

namespace Models;

require_once dirname(__FILE__)."/Model.php";

class Comment extends Model
{
    protected string $tableName = "comments";

    // public function __construct()
    // {
    //     $this->tableName = "comments";
    // }
    
/**
 * Finds all comments associated to a cocktail
 * Returns an array of all comments
 * 
 * @param integer $cocktail_id
 * @return array|bool
 * 
 */
public function findAllByCocktail(int $cocktail_id):array | bool
{
    $requestComments = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE cocktail_id= :cocktail_id");

    $requestComments->execute([
        "cocktail_id" => $cocktail_id
    ]);
    $comments = $requestComments->fetchAll();
    return $comments;
}

/**
 * Inserts the new comment in the "comment" table
 * 
 * @param string $author
 * @param string $content
 * @param integer $cocktail_id
 */
public function save(string $author, string $content, int $cocktail_id):void
{
    $insertCommentRequest = $this->pdo->prepare("INSERT INTO {$this->tableName} (author, content, cocktail_id) VALUES (:author, :content, :cocktail_id)");
    $insertCommentRequest->execute([
        "author" => $author,
        "content" => $content,
        "cocktail_id" => $cocktail_id
    ]); 
}

}
?>