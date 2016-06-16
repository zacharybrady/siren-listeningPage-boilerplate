
<!DOCTYPE html manifest="manifest.appcache" >
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
	$password = "correct";
?>


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>{ Site Title }</title>

	<link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico">

	<!--[if lt IE 9]>
	    <script src="js/polyfills/html5.js" async ></script>
	    <script>
			document.createElement( "picture" );
	    </script>
    <![endif]-->

	<style>
		<?php require_once(  'css/style.css'); ?>
	</style>

	<script>
		// JS Enhancment and Async Loading
		<?php require_once('js/loading/loadjs.js'); ?>
		//Test only supports browsers that are IE8 and newer


		if(typeof(document.querySelectorAll) != 'undefined'){
			document.addEventListener("DOMContentLoaded", function() {
				//loadJS( "js/global.min.js" );
<?php
				if(isset($_POST['pass']) && $_POST['pass'] == $password){
?>
					loadJS( "js/listen.min.js" );

<?php
				}
?>	
			});
	    }

	    //Fix for Windows 8
	    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		    var msViewportStyle = document.createElement("style");
		    msViewportStyle.appendChild(
		        document.createTextNode(
		            "@-ms-viewport{width:auto!important}"
		        )
		    );
		    document.getElementsByTagName("head")[0].
		        appendChild(msViewportStyle);
		}

    </script>


    <!--[if IE 8]>
	    <script src="js/polyfills/respond.js" async ></script>   
    <![endif]-->
	


</head>


<body> 

	<div class="page">
		<main class="page_content">
			<header class="header">
				<h1>{ Musician Name</h1>
			</header>
<?php
	if(isset($_POST['pass'])){
		if($_POST['pass'] == $password) {
			require_once('music.php');
		}
		else {
			require_once('form.php');
			echo '<p class="password_message">Password incorrect. Please try again.</p>';
		}
	}
	else {
		require_once('form.php');
	}
?>			
		</main>
	</div>


</body>

</html>