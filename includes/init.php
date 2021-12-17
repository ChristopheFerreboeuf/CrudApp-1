<?php
ini_set('display_errors', E_ALL);

session_start();
spl_autoload_register(function ($model) {
    include $_SERVER['DOCUMENT_ROOT'].'/model/'.$model . '.php';
});

spl_autoload_register(function ($controller) {
    include $_SERVER['DOCUMENT_ROOT'].'/controller/'.$controller . '.php';
});

$errors = [];
