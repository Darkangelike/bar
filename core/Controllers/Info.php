<?php

namespace Controllers;

class Info extends AbstractController
{
    protected $defaultModelName = \Models\Info::class;

    /**
     * Renders a page displaying all the informations found in the database
     * 
     */
    public function index()
    {
        $infos = $this->defaultModel->findAll();

        return $this->render("infos/index", ["pageTitle" => "List of informations", "infos" => $infos]);
    }

    /**
     * Display the page of ONE information using its associated ID
     */
    public function show()
    {
        $i = null;
        $info = null;

        if (!empty($_GET["id"]) && ctype_digit($_GET['id']))
        {
            $id = (int)$_GET["id"];
        }
        if (!empty($_GET["i"]) && ctype_digit($_GET['i']))
        {
            $i = (int)$_GET["i"];
        }

        $info = $this->defaultModel->findById($id);
        $reactions = new \Models\Reaction();

        if (!$info)
        {
            $parameters = array ("action" => "index", "type" => "info", "info" => "errId");
            $this->redirect($parameters);
        }

        return $this->render("infos/show", ["pageTitle" => "Information n°{$i}", "info" => $info, "i" => $i, "reactions" => $reactions]);
    }

    /**
     * Displays a page with a form
     * If edit mode then the form will be filled with the information taken from the information with the associated id received in the get id
     * If not then the form is empty for the user to insert a new information
     */
    public function new()
    {
        $id = null;
        $description = null;
        $i = null;
        $edit = null;
        $pageTitle = "Add a new information";

        // GET Edition values
        if(!empty($_GET["id"]) && ctype_digit($_GET["id"]))
        {
            $id = (int)$_GET["id"];
            $edit = true;
        }

        if(!empty($_GET["i"]) && ctype_digit($_GET["i"]))
        {
            $i = (int)$_GET["i"];
        }

        // POST edition values
        if (!empty($_POST["id"]) && ctype_digit($_POST["id"]))
        {
            $id = (int)$_POST["id"];
        }

        if (!empty($_POST["edit"]))
        {
            $edit = true;
        }
        
        if(!empty($_POST["i"]) && ctype_digit($_POST["i"]))
        {
            $i = (int)$_POST["i"];
        }

        if (!empty($_POST["description"]))
        {
            $description = htmlspecialchars($_POST["description"]);
        }

        if ($id)
        {
            $info = $this->defaultModel->findById($id);
            
            if (!$info)
            {
                $this->redirect([
                    "type" => "info",
                    "action" => "index",
                    "info" => "errId"
                ]);
            }
            
            if ($edit && $info && !$description)
            {
                $pageTitle = "Edit the information n°{$i}";
                return $this->render("infos/create", ["pageTitle" =>$pageTitle, "info" => $info, "i" => $i, "edit" => $edit]);
            }

            if ($edit && $description)
            {
                $this->defaultModel->edit($id, $description);
                
                $this->redirect([
                    "type" => "info",
                    "action" => "show",
                    "id" => $id,
                    "i" => $i
                    
                ]);
            }
        }
        
        // Creation
        if (!empty($_POST["description"]))
        {
            var_dump($_POST);
                die();
            $description = htmlspecialchars($_POST["description"]);

            $this->defaultModel->save($description);
            $this->redirect([
                "action" => "index",
                "type" => "info"
            ]);
        }
        return $this->render("infos/create", ["pageTitle" => $pageTitle, "edit" => $edit, "i" => $i]);
    }


    /**
     * Remove an information from the database thanks to its associated id
     * 
     * @return void
     */
    public function remove():void
    {
        $id = null;

        // Verifying post id is a number
        if (!empty($_POST["id"]) && ctype_digit($_POST["id"]))
        {
            $id = (int)$_POST["id"];
        }

        // Checking if an information with this ID exists in the database
        $info = $this->defaultModel->findById($id);

        // If no information has this id, do a redirection
        if (!$id)
        {
            $this->redirect([
                "type" => "info",
                "action" => "index",
                "info" => "errId"
            ]);
        }

        // if the id exists then:

        $this->defaultModel->remove($id);
        $this->redirect([
            "type" => "info",
            "action" => "index"
        ]);
    }
}

?>