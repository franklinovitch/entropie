<?php 

function logRequest() {
	$fichierLog = './requestsLog.txt';

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	$complete_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	$log  = "adresse: ".$_SERVER['REMOTE_ADDR']." ip ".$ip." - ".date("F j, Y, g:i a").", URL request: ".$complete_url."\n";
	
	$fp = fopen($fichierLog, 'a');
	fputs($fp, $log);
	fclose($fp);
}

?>