<?php
ini_set('display_errors', E_ALL);
/*ini_set('memory_limit', '-1');*/
session_start();
spl_autoload_register(function ($class_name) {
    include $_SERVER['DOCUMENT_ROOT'].'/classes/'.$class_name . '.php';
});
$errors = [];
