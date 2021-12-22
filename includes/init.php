<?php
ini_set('display_errors', E_ALL);

spl_autoload_register(function ($className) {
    include_once str_replace('\\', '/', $className) . '.php';
});

$errors = [];
