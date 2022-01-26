<?php

namespace Controllers;

require_once dirname(__FILE__)."/../Models/Cocktail.php";
require_once dirname(__FILE__)."/../Models/Comment.php";
require_once dirname(__FILE__)."/../Models/Icecream.php";
require_once "core/App/Response.php";
require_once "core/App/View.php";
require_once "core/Models/Sandwich.php";

abstract class AbstractController
{
    protected object $defaultModel;
    protected $defaultModelName;

    public function __construct()
        {
            $this->defaultModel = new $this->defaultModelName();
        }
    
    /**
     * Displays a page using different html templates and an array of data
     * 
     * @param string $template
     * @param array $donnees
     * 
     */
    public function render(string $template, array $donnees)
    {
        return \App\View::render($template, $donnees);
    }

    /**
     * Redirect to the given $url in parameter
     * 
     * @param string $url
     * 
     * @return \App\Response
     */
    public function redirect(string $url):\App\Response
    {
        return \App\Response::redirect($url);
    }
}



?>