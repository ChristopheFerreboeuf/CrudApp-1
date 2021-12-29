<?php
ini_set('display_errors', E_ALL);

/*spl_autoload_register(function ($className) {
    include_once str_replace('\\', '/', $className) . '.php';
});*/

spl_autoload_register('AutoLoader');

function AutoLoader($className) {
    $file = str_replace('\\',DIRECTORY_SEPARATOR, $className);

    require_once 'src' . DIRECTORY_SEPARATOR . $file . '.php';
}

$errors = [];
