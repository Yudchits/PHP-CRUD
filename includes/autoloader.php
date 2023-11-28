<?php
    spl_autoload_register('autoloadFiles');

    function autoloadFiles($file_name)
    {
        $prefix = "crud/";
        $suffix = ".php";
        $full_path = $prefix . $file_name . $suffix;

        if(!file_exists($full_path)){
            echo "Loading files failed";
        }

        include_once $full_path;
    }
