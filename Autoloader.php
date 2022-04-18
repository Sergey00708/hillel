<?php

function MyAutoloader($className)
{
//    echo 'Обратились к классу с Shop' . PHP_EOL;
    $segments = explode('\\', $className);
    $filename = __DIR__ . '/Ithillel/Auto/' . $segments[count($segments) - 1] . '.php';
    if (file_exists($filename)) {
        require_once $filename;
    }
}

function Myloader($className)
{
//    echo 'Обратились к неизвестному классу ' . $className . PHP_EOL;
    $filename = __DIR__ . '/' . $className . '.php';
    //echo $filename . PHP_EOL;
    if (file_exists($filename)) {
        require_once $filename;
    }
}

spl_autoload_register('MyAutoloader');
spl_autoload_register('Myloader');

