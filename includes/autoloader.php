<?php

spl_autoload_register(function ($class_name) {
    //class directories

    $source = $_SERVER['DOCUMENT_ROOT'];
    $subfolder = ""; // format: /foldername
    $dirs = [
        $source . $subfolder . '/',
        $source. $subfolder . '/classes/',
        $source. $subfolder . '/classes/models/',
        $source. $subfolder . '/classes/controllers/'
    ];

    foreach($dirs as $directory)
    {

       // echo "<br>" . $directory ;

        //see if the file exsists
        if(file_exists($directory.$class_name . '.php'))
        {
            //echo $directory.$class_name . '.php<br>';
            require($directory.$class_name . '.php');
        }
    }
});