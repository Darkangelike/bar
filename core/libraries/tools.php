<?php


/**Redirect the page
 * @param string $url 
 * @return void
 */
function redirect(string $url): void{
    header("Location: {$url}");
    exit();
}

/**
 * Render a web page from a template and datas given
 * @param string $nomDeTemplate
 * @param array $donnees
 * @return void
 */
function render(string $nomDeTemplate, array $donnees):void {
    ob_start();

    extract($donnees);

    require_once "templates/{$nomDeTemplate}.html.php";
    $pageContent = ob_get_clean();

    require_once "templates/layout.html.php";
}




?>