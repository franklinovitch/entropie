<?php
	$domain = $_SERVER['HTTP_HOST'] ;
	
	if ($domain !== 'entrequote.entropie.ovh') {
		$url = "http://entrequote.entropie.ovh";
		header('Location: '.$url);
	}
?>

<?php
	echo "Hello entrequote!";
?>