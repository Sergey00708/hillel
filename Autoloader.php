<?php

function myAutoloader($className)
{
    $segments = explode('\\', $className);
    $fileName = __DIR__. '/Ithillel/Auto/' .$segments[count($segments) -1] . '.php';
    if (file_exists($fileName)){
        include $fileName;
    }
}

spl_autoload_register('MyAutoloader');

