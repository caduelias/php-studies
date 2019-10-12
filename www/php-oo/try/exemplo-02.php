<?php

    function error_handler($code, $message, $file, $line) 
    {
        echo json_encode(array(
            "message"=>$message->getMessage(),
            "line"=>$line->getLine(),
            "file"=>$file->getFile(),
            "code"=>$code->getCode()
        ));
    }

    set_error_handler("error_handler");

    $div = 100 / 0;