<?php

namespace Controllers;

class Icecream extends AbstractController
{
    protected $defaultModelName = \Models\Icecream::class;

    /**
     * Renders the index page of icecreams
     * 
     */
    public function index()
    {
        $icecreams = $this->defaultModel->findAll();
        $pageTitle = "List of icecreams";
        return $this->render("icecreams/index", compact("pageTitle", "icecreams"));
    }

    /**
     * Renders the index page of icecreams
     * 
     */
    public function show()
    {
        $id = null;
        $i = null;
        if(!empty($_GET["id"]) && ctype_digit($_GET["id"]))
        {
            $id = (int)$_GET["id"];
        }

        if(!empty($_GET["i"]) && ctype_digit($_GET["i"]))
        {
            $i = (int)$_GET["i"];
        }

        if (!$id)
        {
            $this->redirect([
                
            "type" => "icecream",
            "action" => "index",
            "info" => "errId"
            ]);
        }

        $icecream = $this->defaultModel->findById($id);
        
        if (!$icecream)
        {
            $this->redirect([
                
            "type" => "icecream",
            "action" => "index",
            "info" => "errId"
            ]);
        }

        $pageTitle = "About ice cream n°{$i}";
        return $this->render("icecreams/show", compact("pageTitle", "icecream", "i"));
    }

    /**
     * Insert a new icecream if a valid description was submitted through the form
     * 
     */
    public function new()
    {
        $description = null;
        $create = true;
        $edit = null;

        if (!empty($_POST["description"]))
        {
            $description = htmlspecialchars($_POST["description"]);
        }

        if (!$description)
        {
            return $this->render("icecreams/create", ["pageTitle" => "Create a new icecream", "create" => $create, "edit" => $edit]);
        }

        $icecream = $this->defaultModel->save($description);

        $this->redirect([
            "type" => "icecream",
            "action" => "index"
        ]);
    }

    /**
     * remove one ice cream using its associated ID submitted when the user clicks on the X button of its card
     * 
     * @return void
     */
    public function delete(): void
    {
        $id = null;
        
        if(!empty($_POST["id"]) && ctype_digit($_POST["id"]))
        {
            $id = $_POST["id"];
        }

        if (!$id)
        {
            $this->redirect([
                
            "type" => "icecream",
            "action" => "index",
            "info" => "errId"
            ]);
        }
        $this->defaultModel->remove($id);

        $this->redirect([
            "type" => "icecream",
            "action" => "index"
        ]);
    }

}

?>