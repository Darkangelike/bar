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
     * Renders a page displaying only one sandwich
     * Using the id that was submitted through the form button
     * 
     */
    public function show()
    {
        $id = null;
        $i = null;

        if (!empty($_GET["id"]) && ctype_digit($_GET["id"]))
        {
            $id = (int)$_GET["id"];
        }

        if (!empty($_GET["i"]) && ctype_digit($_GET["i"]))
        {
            $i = (int)$_GET["i"];
        }

        $sandwich = $this->defaultModel->findById($id);

        if (!$sandwich)
        {
            $this->redirect("sandwiches.php?info=errId");
        }

        return $this->render("sandwiches/show", ["sandwich" => $sandwich, "i" => $i]);
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
        $id = null;
        $edit = null;
        $i = null;
        $sandwich = null;
        $pageTitle = "Create a sandwich";

        if (!empty($_GET["i"]) && ctype_digit($_GET["i"])) {$i = (int)$_GET["i"];}

        if (!empty($_POST["description"]))
        {
            $description = htmlspecialchars($_POST["description"]);
        }

        if (!empty($_POST["price"]) && ctype_digit($_POST["price"]))
        {
            $price = (int)$_POST["price"];
        }

        if (!empty($_GET["id"]) && ctype_digit($_GET["id"]))
        {
            $id = (int)$_GET["id"];
        }

        if (!empty($_POST["edit"]))
        {
            $edit = true;
        }

        if ($id)
        {
            $sandwich = $this->defaultModel->findById($id);

            if (!$sandwich)
            {
                $this->redirect("sandwiches.php?info=errId");
            }
            
            if ($description && $price && !$edit) {
                $pageTitle = "Edit the sandwich n°{$i}";
            }

            if ($edit)
            {
                $this->defaultModel->edit($id, $description, $price);
                $this->redirect("sandwich.php?id={$id}");
            }
        }

        if ($price && $description && !$edit)
        {
            var_dump($_POST);
            var_dump($edit);
            die();
            $this->defaultModel->save($description, $price);
            $this->redirect("sandwiches.php");
        }
        return $this->render("sandwiches/create", ["i" => $i, "id" => $id, "sandwich" => $sandwich, "edit" => $edit, "pageTitle" => $pageTitle]);
    }
}

?>