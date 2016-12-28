<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://www.entropie.ovh">Entropie</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<?php $page = $_REQUEST['page']; ?>
				<li <?php echo (!isset($page) || $page == 'playlist' ? 'class="active"' : '') ?>><a href="/?page=playlist">#kenavo</a></li>
				<li <?php echo ($page == 'recherche' ? 'class="active"' : '') ?>><a href="/?page=recherche">Recherche</a></li>
			</ul>
			<div class="pull-right">
				<a href="http://www.grooveshark.com" id="grooveshark-link" target="_blank"><img src="./resources/img/Grooveshark-logo.jpeg" alt="grooveshark-logo" class="img-circle" id="grooveshark-logo"/> Powered by Grooveshark</a>
			</div>
		</div><!--/.nav-collapse -->
	</div>
</div>