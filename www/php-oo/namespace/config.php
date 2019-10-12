<?php

    spl_autoload_register(function($className)
        {
            $dirClass = "Class";

            $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $className . ".php");
            
            //var_dump($filename);

            if (file_exists ($filename) === true)
            {
                require_once($filename);
            }
            
        }
);
