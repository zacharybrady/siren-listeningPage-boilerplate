<?php
	//Siren Listening Page Boilerplate v1.0
	//File Name: Listen
	//File Purpose: To show developer class and element structure
	//File Notes: Just an example

	//Page Data Variables
	$pagename = 'listen';

    $meta_title = '{ Band Name } | Listening page';
    $meta_desc = "Enjoy.";


	//Header
	require_once('includes/header.php'); 
?>

<div class="container container-listen">
	
	<main class="container-inner row">
		<section class="col_hlf">

			<div class="album_container">
				<h2 class="album_title">{ Album Name }</h2>

				<!-- Container for Music Player -->
				<div class="album_playlist playlist-js"></div>

			</div>

			<!-- Download the Album -->
			<div class="album_download">
				<a href="music/MechanicalRiver-AstralCastle.zip" ><img src="images/icon-download.gif" alt=""> Download The Album</a>
			</div>

		</section>
		<div class="col_hlf">

			<!-- Management contact information-->
			<section class="mgmt">
				<h2 class="mgmt_title">Management</h2>
				<p class="mgmt_content">
					<span class="mgmt_name">{ Name }</span><br/>
					<a href="mailto:{ Email }" class="mgmt_email">{ Email }</a>
				</p>
			</section>

		</div>
	</div>
	


</main>


<?php require_once('includes/footer.php'); ?>