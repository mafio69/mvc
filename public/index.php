<?php


$path = realpath(dirname(__FILE__));
$pathBase = str_replace(DIRECTORY_SEPARATOR.'public' ,'', $path);
define('BASE_PATH_INDEX',$pathBase);
require_once (BASE_PATH_INDEX.'/app/bootstrap.php');

$init = new Core;
?>
