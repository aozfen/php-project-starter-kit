<?php
session_start();
ob_start();


   require '../../classes/class.basicdb.php';
   require '../../system/config.php';
   
   $db = new basicdb($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);
   
$helpers = [
    'url',
    'user',
    'system',
    'function'
];

for($i = 0; $i < count($helpers); $i++){
   require '../../helper/' . $helpers[$i] . '.php';
}

