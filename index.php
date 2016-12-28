<?php

	// Tableau contenant les noms des sous-domaines
	$domainsArray = array('entrequote', 'kenavo', 'latabouze', 'blog', 'liza');

	// Si la requête contient le nom de l'un de ces sous-domaines, on accède au dossier correspondant, sinon on affiche la page d'accueil
	if( isset($_REQUEST['domain']) && in_array( $_REQUEST['domain'], $domainsArray ) ) {
		require_once($_REQUEST['domain'].'/index.php');
	} else {
		require_once('home.php');
	}

?>