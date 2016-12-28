<div id="login-form" class="container">

	<?php if(isset($_SESSION['flash'])){ echo $_SESSION['flash']; } ?>

	<form class="form-horizontal" action="pages/login/traitement.php" method="POST">
		
		<h3 style="text-align:left">Connexion</h3>

		<div class="control-group">
			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-lock"></i></span>
					<input type="password" id="inputPassword" class="input-xlarge" placeholder="Mot de passe" name="password" value="" required  /><br/>
				</div>
			</div>
		</div>

		<div class="control-group">
		    <div class="controls">
				<button type="submit" class="bouton bouton-success" style="margin: 20px 0 20px;">Connexion</button>
			</div>
		</div>

	</form>

</div>

<?php unset($_SESSION['flash']); ?>