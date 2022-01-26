<?php

namespace Controllers;

require_once "core/Controllers/AbstractController.php";

class Sandwich extends AbstractController
{
    protected $defaultModelName = \Models\Sandwich::class;

    /**
     * Renders a page containing all the sandwiches found in the database
     * 
     */
    public function index()
    {
        $sandwiches = $this->defaultModel->findAll();
        return $this->render("sandwiches/index", ["pageTitle" => "List of sandwiches", "sandwiches" => $sandwiches]);
    }

    /**
     * Renders a page with a form to create a new sandwich
     * If a form is submitted, the page will insert a new sandwich in the database and redirect to sandwiches index
     * 
     * 
     */
    public function new()
    {
        $description = null;
        $price = null;

        if (!empty($_POST["description"]))
        {
            $description = htmlspecialchars($_POST["description"]);
        }

        if (!empty($_POST["price"]) && ctype_digit($_POST["price"]))
        {
            $price = (int)$_POST["price"];
        }

        if ($price && $description)
        {
            $this->defaultModel->save($description, $price);
            $this->redirect("sandwiches.php");
        }
        return $this->render("sandwiches/create", ["pageTitle" => "Create a new sandwich"]);
    }
}

?>