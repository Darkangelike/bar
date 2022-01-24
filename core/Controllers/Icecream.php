<?php

namespace Controllers;

require_once dirname(__FILE__)."/../libraries/tools.php";
require_once dirname(__FILE__)."/AbstractController.php";

class Icecream extends AbstractController
{
    protected $defaultModelName = \Models\Icecream::class;

    /**
     * Renders the index page of icecreams
     * 
     * @return void
     */
    public function index():void
    {
        $icecreams = $this->defaultModel->findAll();
        $pageTitle = "List of icecreams";
        render("icecreams/index", compact("pageTitle", "icecreams"));
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
            redirect("createIcecream.php?info=errForm");
        }

        $icecream = $this->defaultModel->save($description);

        redirect("icecreams.php");
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
            redirect("icecreams.php?info=errId");
        }
        $this->defaultModel->remove($id);

        redirect("icecreams.php");
    }

}

?>