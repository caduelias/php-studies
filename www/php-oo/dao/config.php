<?php 

spl_autoload_register(function($className)
{
    
    $filename = "class" . DIRECTORY_SEPARATOR . $className. ".php";
    
    //var_dump($filename);

    if (file_exists ($filename) === true)
    {
        require_once($filename);
    }
    
}

);