<?php
namespace Controllers;

class Cocktail extends AbstractController
{

    protected $defaultModelName = \Models\Cocktail::class;

    /**
     * Render a page of all the cocktails found in the database
     * 
     */
    public function index()
    {
        
        $cocktails = $this->defaultModel->findAll();
        $pageTitle = "Every cocktails";
        return $this->render("cocktails/index", compact("cocktails", "pageTitle"));
    }

    /**
     * Render a page of only one cocktail found in the datababe
     * using the id from the submit button
     * 
     */
    public function show()
    {
        $id = null;

        if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
            $id = (int)$_GET["id"];
        }

        if (!$id) {
            $this->redirect();
        }
        
        // Retrieving one cocktail using its associated id
        $cocktail = $this->defaultModel->findById($id);
        
        // Instancing Comment class
        $modelComment = new \Models\Comment();

        // Retrieving all the comments associated with a cocktail_id
        $commentaires = $modelComment->findAllByCocktail($id);
        
        $pageTitle = $cocktail->name;

        return $this->render("cocktails/show", compact("cocktail", "commentaires", "pageTitle"));
    }


    /**
     * Insert a new cocktail in the database by taking
     * all the values $name $ingredients and $image
     * from the submitted form
     * 
     * @return void
     * 
     */
    public function new():void
    {

        $name = null;
        $ingredients = null;
        $image = null;

        if (!empty($_POST["name"]))
        {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (!empty($_POST["ingredients"]))
        {
            $ingredients = htmlspecialchars($_POST["ingredients"]);
        }

        if (!empty($_POST["image"]))
        {
            $image = htmlspecialchars($_POST["image"]);
        }

        if ($name && $ingredients && $image)
        {
            // $modelCocktail = new \Models\Cocktail();
            $cocktail = $this->defaultModel->save($name, $ingredients, $image);
            $this->redirect([
                "type" => "cocktail",
                "action" => "index"
            ]);
        }

        $pageTitle = "Create a new cocktail";

        $this->render("cocktails/create", compact("pageTitle"));
    }


    /**
     * 
     * Delete a cocktail from the database
     * using the id submitted by the user
     * 
     * @return \App\Response
     */
    public function delete():\App\Response
    {
        $id = null;

        if(!empty($_POST["id"]) && ctype_digit($_POST["id"]))
        {
            $id = (int)$_POST["id"];
        }

        if (!$id)
        {
            return $this->redirect();
        }

        // $modelCocktail = new \Models\Cocktail();
        $cocktail = $this->defaultModel->findById($id);

        if (!$cocktail)
        {
            return $this->redirect();
        }

        $this->defaultModel->remove($id);

        return $this->redirect();
    }
}

?>