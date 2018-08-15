<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
	<title><?php if(!empty($title)) echo $title; else echo "ahmetozfen.com | ahmet özfen'in blogu"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#1a1a1a">
    <meta name="msapplication-navbutton-color" content="#1a1a1a">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1a1a1a">
    <meta name="country" content="Turkey" />
	<meta http-equiv="content-language" content="tr-TR" />

    <link rel="shortcut icon" href="<?=asset_url('img/meta/logo-mins.png');?>" type="image/x-icon" />

	<?php
  
		foreach ($site['files']['css'] as $key => $value) {
			echo $value;
		}
		
	?>

		
	
</head>
<body>

<header class="col-12">

</header>

