<?php
require_once ('config/config.php');

spl_autoload_register(function ($class){
    $filename = APPROOT.'/libraries/' . str_replace('\\', '/', $class) . '.php';

    include_once($filename);
});