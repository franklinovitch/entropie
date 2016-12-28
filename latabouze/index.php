<?php
	$domain = $_SERVER['HTTP_HOST'] ;
	
	if ($domain !== 'latabouze.entropie.ovh') {
		$url = "http://latabouze.entropie.ovh";
		header('Location: '.$url);
	}
?>
<?php
	echo "Hello tabouze!";
?>