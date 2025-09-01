<?php

	//if($_GET['key'] == '8aq26UfQxKo78mLA5s') {

		require('wp-load.php');
		//require('wp-admin/includes/file.php');
		require('wp-content/plugins/alize-parc-auto/core.php');

		// voir sinon require_once

		alizeDeleteImages();
		alizeDeletePosts();
		alizeDeleteVehicules();

		// Fonctions du fichier : wp-content/plugins/alize-parc-auto/core.php
		importVehicules();

	//} else {
	//	exit;
	//}

?>
