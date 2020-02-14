<?php

    spl_autoload_register('autoloader');

    function autoloader($class_name){
        $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        if(strpos($url, 'includes') !== false){
            $path = '../classes/';
        }
        else{
            $path = 'classes/';
        }
        $postfix = ".class.php";

        include_once $path . $class_name . $postfix;;
    }

?>