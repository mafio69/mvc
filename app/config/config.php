<?php
/**
 * Created by PhpStorm.
 * User: MariuszF
 * Date: 09.10.2018
 * Time: 20:01
 */

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','tmvc');

$path = realpath(dirname(dirname(__FILE__)));
define('APPROOT',$path);
define('URLROOT','http://mvc.test');
define('SITENAME' , 'Mafio MVC');