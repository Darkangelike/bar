<?php
namespace Controllers;

class Reaction extends AbstractController
{
    protected $defaultModelName = \Models\Reaction::class;

    public function new():void
    {
        // Declaring variables
        $info_id = null;
        $info = null;
        $description = null;

        // get reaction values
        if (!empty($_POST["info_id"]) && ctype_digit($_POST["info_id"]))
        {
            $info_id = (int)$_POST["info_id"];
        }

        if (!empty($_POST["description"]))
        {
            $description = htmlspecialchars($_POST["description"]);
        }

        // Check if values are correct
        if (!$info_id || !$description)
        {
            $this->redirect([
                "type" => "info",
                "action" => "show",
                "id" => $info_id,
                "info" => "errId"
            ]);
        }
        
        // check if info exists using its id (info_id)
        $info = new \Models\Info();
        
        $info = $info->findById($info_id);
        
        // if !$info then redirect
        if (!$info)
        {
            $this->redirect([
                "type" => "info",
                "action" => "show",
                "id" => $info_id,
                "info" => "errId"
            ]);
        }
        
        // insert the reaction
        $this->defaultModel->save($description, $info_id);
        
        // Redirect to the info page
        // die();
        $this->redirect([
            "type" => "info",
            "action" => "show",
            "id" => $info_id
        ]);
    }
}
?>