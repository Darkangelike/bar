<?php

namespace Controllers;

require_once dirname(__FILE__)."/AbstractController.php";

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
            $this->redirect("icecreams.php?info=errId");
        }

        $icecream = $this->defaultModel->findById($id);
        
        if (!$icecream)
        {
            $this->redirect("icecreams.php?info=errId");
        }

        $pageTitle = "About ice cream n°{$i}";
        return $this->render("icecreams/show", compact("pageTitle", "icecream", "i"));
    }

    /**
     * Insert a new icecream if a valid description was submitted through the form
     * 
     * @return void
     */
    public function new():void
    {
        $description = null;
        if (!empty($_POST["description"]))
        {
            $description = htmlspecialchars($_POST["description"]);
        }

        if (!$description)
        {
            $this->redirect("createIcecream.php?info=errForm");
        }

        $icecream = $this->defaultModel->save($description);

        $this->redirect("icecreams.php");
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
            $this->redirect("icecreams.php?info=errId");
        }
        $this->defaultModel->remove($id);

        $this->redirect("icecreams.php");
    }

}

?>