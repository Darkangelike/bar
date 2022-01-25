<?php
namespace Controllers;

require_once dirname(__FILE__)."/AbstractController.php";
require_once dirname(__FILE__)."/../Models/Comment.php";

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
     * @return void
     */
    public function show(): void
    {
        $id = null;

        if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
            $id = (int)$_GET["id"];
        }

        if (!$id) {
            $this->redirect("index.php?info=errId");
        }

        // Instancing Cocktail class
        // $modelCocktail = new \Models\Cocktail();

        
        // Retrieving one cocktail using its associated id
        $cocktail = $this->defaultModel->findById($id);
        
        // Instancing Comment class
        $modelComment = new \Models\Comment();

        // Retrieving all the comments associated with a cocktail_id
        $commentaires = $modelComment->findAllByCocktail($id);
        
        $pageTitle = $cocktail["name"];

        $this->render("cocktails/show", compact("cocktail", "commentaires", "pageTitle"));
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
            $this->redirect("index.php");
        }


        $pageTitle = "Create a new cocktail";

        $this->render("cocktails/create", compact("pageTitle"));
    }


    /**
     * 
     * Delete a cocktail from the database
     * using the id submitted by the user
     * 
     * @return void
     */
    public function delete():void
    {
        $id = null;

        if(!empty($_POST["id"]) && ctype_digit($_POST["id"]))
        {
            $id = (int)$_POST["id"];
        }

        if (!$id)
        {
            $this->redirect("index.php?info=errId");
        }

        // $modelCocktail = new \Models\Cocktail();
        $cocktail = $this->defaultModel->findById($id);

        if (!$cocktail)
        {
            $this->redirect("index.php?info=errId");
        }

        $this->defaultModel->remove($id);

        $this->redirect("index.php");
    }
}

?>