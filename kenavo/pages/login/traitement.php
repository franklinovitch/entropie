<?php
session_start();

if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
	header("Location: pages/login/logout.php");
}

if(isset($_POST['password'])) {
	$password = "latabouze";
	if ($_POST['password'] == $password) {
		$_SESSION['logged'] = "logged";

		header("Location: ../../index.php");
	} else {
		$_SESSION['flash'] = '<div class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4>Oups :(</h4>
								Mot de passe incorrect.
							</div>';
		header("Location: ../../index.php?page=login");
	}
}