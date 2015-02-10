<?php
	//Siren Listening Page Boilerplate v1.0
	//File Name: Home
	//File Purpose: Where the password form lives
	//File Notes: Just an example

	//Page Data Variables
	$pagename = 'index';

    $meta_title = '{ Band Name } | Enter Password to Continue';
    $meta_desc = "Enter Password to continue to listening page.";


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