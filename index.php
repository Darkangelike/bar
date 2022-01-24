<?php 

require_once dirname(__FILE__)."/core/Controllers/Cocktail.php";

// Controller

$typeCocktail = new \Controllers\Cocktail();
$typeCocktail->index();

?>