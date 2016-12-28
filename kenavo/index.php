<?php
	session_start();
	require_once('logger.php');

	// Redirection de entropie.ovh/kenavo vers kenavo.entropie.ovh
	$domain = $_SERVER['HTTP_HOST'] ;
	
	if ($domain !== 'kenavo.entropie.ovh') {
		$url = "http://kenavo.entropie.ovh";
		header('Location: '.$url);
	}

	// Si on arrive sur la page de login, on déco
	if( isset($_SESSION['logged']) && isset($_GET['page']) && $_GET['page']=="login" ){
		header("Location: pages/login/logout.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php require_once('./elements/header.php'); ?>

<body>

	<?php require('./elements/nav.php'); ?>

	<div class="container">

		<?php
			// Si une requête anormale est passée dans l'url, on log.
			/*
			if(isset($_GET)) {
				foreach ($_GET as $key => $value) {
					if($key != 'page') {
						logRequest(); //définie dans logger.php
					}
				}
			}
			*/
			if(isset($_SESSION['logged'])) {
				if (isset($_GET['page']) && file_exists('pages/' . $_GET['page'] . '/contenu.php')){
					$page = $_GET['page'];
				} else {
					// logRequest(); //définie dans logger.php
					$page = "playlist";
				}
			} elseif(!isset($_SESSION['logged']) || empty($_SESSION['logged'])) {
				if (isset($_GET['page']) && $_GET['page']=='login'){
					$page = 'login';
				} else {
					$page = "login";
					// logRequest(); //définie dans logger.php
				}
			} 
			$chemin = './pages/' . $page . '/contenu.php';
		?>

		<div id="content">
			<?php require_once($chemin); ?>
		</div>
		
	</div><!-- /.container -->


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="./resources/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="./resources/js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>