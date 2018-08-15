<?php

$config = array();

$config['db'] = [
  'host' => 'localhost',
  'name' => 'personel',
  'user' => 'root',
  'pass' => 'root'
];

@$dil = $_COOKIE['lang'];
if(empty($dil)) { 
  $config['default_language'] = 'tr'; 
}else{
  if($dil == 'tr' || $dil == 'en') $config['default_language'] = $dil; 
  else  $config['default_language'] = 'tr'; 	
}



define('dir', realpath('.'));
define('controller', dir . '/app/controller');
define('view', dir . '/app/view');
define('url','http://' . $_SERVER['SERVER_NAME'] . '/altyapi');


