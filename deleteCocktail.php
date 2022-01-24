<?php

require_once dirname(__FILE__)."/core/Controllers/Cocktail.php";

$typeCocktail = new \Controllers\Cocktail();

$typeCocktail->delete();

?>