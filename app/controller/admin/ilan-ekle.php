<?php
$CSS_JS_FILE = new CSS_JS_FILELOADER;
$admin['files'] = $CSS_JS_FILE->AdminLoad('ilan-ekle');
require view('admin/ilan-ekle');