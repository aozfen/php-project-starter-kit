<?php

if(post('type')){
	if(file_exists(dir . '/app/ajax/admin' . post('type') . '.php')){
     require dir . '/app/ajax/admin' . post('type') . '.php';
     echo 'YES';
	}
}else{
    echo 'NON';
}