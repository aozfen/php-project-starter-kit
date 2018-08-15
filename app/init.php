<?php
session_start();
ob_start();
date_default_timezone_set('Europe/Istanbul');
//error_reporting(0);
require 'system/config.php';

function __autoLoad($className){
  $classFile = __DIR__ . '/classes/class.' .  strtolower($className) .'.php';
   if (file_exists($classFile)) {
     require $classFile;
   }
}

__autoLoad('medoo');
__autoload('fileloader');
Helper::Load();



use Medoo\Medoo;

$db = new Medoo([
'database_type' => 'mysql',
'database_name' => $config['db']['name'],
'server'        => $config['db']['host'],
'username'      => $config['db']['user'],
'password'      => $config['db']['pass'],
'charset'       => 'utf8',
'port'          => 3306
]);


require 'language/' . $config['default_language'] . '/lang.php';
