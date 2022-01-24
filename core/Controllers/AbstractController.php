<?php

namespace Controllers;

require_once dirname(__FILE__)."/../Models/Cocktail.php";
require_once dirname(__FILE__)."/../Models/Comment.php";
require_once dirname(__FILE__)."/../Models/Icecream.php";

abstract class AbstractController
{
    protected object $defaultModel;

    protected $defaultModelName;

        public function __construct()
            {
                $this->defaultModel = new $this->defaultModelName();
            }
}



?>