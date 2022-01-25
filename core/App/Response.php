<?php

namespace App;

class Response
{
        
    /**
     * Redirect the page towards the url in the param
     * 
     * @param string $url 
     * 
     * @return void
     */
    public static function redirect(string $url): void{
        header("Location: {$url}");
        exit();
    }

}


?>