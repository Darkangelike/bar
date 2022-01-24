<?php

require_once dirname(__FILE__)."/core/Controllers/Cocktail.php";
require_once dirname(__FILE__)."/core/Controllers/Comment.php";

$typeComment = new \Controllers\Comment();
$typeComment->deleteComment();

?>