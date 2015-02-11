<?php
//Siren Listening Page Boilerplate v1.0
//File Name: Global Header
//File Purpose: Starts page, include <head> element, includes styled header of page
//File Notes: 

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="For SEO">

	<title><?php echo $meta_title; ?>| Suits &amp; Sandals Sample Framework</title>
	<meta name="description" content="<?php echo $meta_desc; ?>"/>

	<link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico">
	<?php 

		//Sets up data for asyncronous load of javascript files

		if($pagename == 'listen'){
		   	echo '<meta name="fulljs"  content="js/listen.min.js">';
		}
		else if ($pagename == 'index'){ 
		    echo '<meta name="fulljs"  content="js/home.min.js">';
		} 
	?>
	<script>
        <?php require_once('js/enhance.js'); ?>
    </script>


	<script>
	    <?php require_once(  'js/polyfills/html5.js'); ?>
	</script>


	<!--[if IE 8]>
		<link rel="stylesheet" href="css/enhanced-ie.css" type="text/css" />
	<![endif]-->


	<style>
        <?php require_once('css/basic.css'); ?>
    </style>

	<!--[if IE 8]>
	    <script>
	        <?php require_once( 'js/polyfills/respond.js'); ?>
	    </script>
    <![endif]-->

	<link rel="stylesheet" href="css/enhanced.css" type="text/css" media="only all" />


</head>

<!-- Page class and page specific class -->
<body class="page page-<?php echo $pagename; ?>"> 

<header class="page_header" role="banner">
	<h1 class="page_title">{ Musician Name }</h1>
</header>
