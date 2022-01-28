<?php

namespace Controllers;

class Comment extends AbstractController
{

    protected $defaultModelName = \Models\Comment::class;


    /**
     * Insert a new comment
     * 
     * @return void
     * 
     */
    public function createComment():void {

        $id = null;
        $comment = null;
        $author = null;
        $content = null;

        // Retrieving the GET ID

        if (!empty($_POST["cocktail_id"]) && ctype_digit($_POST["cocktail_id"])) {
            $cocktail_id = (int)$_POST["cocktail_id"];
        }

        // Retrieving author if valid

        if (!empty($_POST["author"])) {
            $author = htmlspecialchars($_POST["author"]);
        }

        // Retrieving content if valid

        if (!empty($_POST["content"])) {
            $content = htmlspecialchars($_POST["content"]);
        }

        // Checking if all the values to insert are valid

        if (!$author || !$content || !$cocktail_id) { 
            $this->redirect("cocktail.php?id={$cocktail_id}");
        }

        // Instancing Cocktail class
        $modelCocktail = new \Models\Cocktail();

        // Checking if cocktail ID exists

        $cocktail = $modelCocktail->findById($cocktail_id);

        // ERROR IF COCKTAIL ID DOES NOT EXIST IN DATABASE AND REDIRECTION TO INDEX

        if (!$cocktail) {
            $this->redirect("index.php?info=comErr");
        }
        
        // Saving the comment in the database
        $comment = $this->defaultModel->save($author, $content, $cocktail["id"]);

        $this->redirect("cocktail.php?id={$cocktail_id}");

}


    /**
     * Delete a comment
     * 
     * @return \App\Response
     * 
     */
    public function deleteComment():\App\Response
    {
        $commentaire_id = null;

        // Get comment ID from submitted POST form

        if (!empty($_POST["commentaire_id"]) && ctype_digit($_POST["commentaire_id"])) {
            $commentaire_id = $_POST["commentaire_id"];
        }

        // Get cocktail ID for a possible redirect

        if (!empty($_POST["cocktail_id"]) && ctype_digit($_POST["cocktail_id"])) {
            $cocktail_id = $_POST["cocktail_id"];
        }

        // $modelComment = new \Models\Comment();

        // check comment ID exists

        $commentaire = $this->defaultModel->findById($commentaire_id);

        // Redirect with error message if commentaire is false

        if (!$commentaire) {
           return $this->redirect("index.php?info=errNoId");
        }

        // Remove comment

        $this->defaultModel->remove($commentaire_id);

        return $this->redirect("cocktail.php?id={$cocktail_id}");
    }

}



?>