<?php

$title = "Ahmet Özfen | Web Developer";
$CSS_JS_FILE = new CSS_JS_FILELOADER;
$site['files'] = $CSS_JS_FILE->SiteLoad('index');   

require view('index');


