<?php
	//Siren Listening Framework v3.0
	//File Name: Index Page
	//File Purpose: To show developer class and element structure
	//File Notes: Just an example

	//Page Data Variables
	$pagename = 'index';

    $meta_title = 'Homepage';
    $meta_desc = "Welcome to the site";
    $meta_keywords = "stuff";


	//Header
	require_once('includes/header.php'); 
?>

<div class="container container-home">

	<div class="password">
		<h2 class="password_title">ENTER THE PASSWORD</h2>
			<form name="login" id="enter" class="password_form">
				<INPUT TYPE="text" NAME="pass"  id="target" class="password_input">
				<input type="button" value="Enter" onClick="TheLogin(this.form)" class="password_submit">
			</form>
	</div>

</div>



<?php require_once('includes/footer.php'); ?>