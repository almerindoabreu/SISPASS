<?php

spl_autoload_register(function($nameClass){
    $dirClasses = array("Model");

    foreach($dirClasses as $key => $dirClass){
        $filename =$dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
        
        if (file_exists($filename)){
            require_once($filename);
        }
    }
    
});